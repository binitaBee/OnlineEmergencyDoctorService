<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in Admin!
                    
                   Currently Available Doctors : <br>
                   <h4> Need an appointment right now? </h4>
                    <h3> E.M.O </h3>
                    1. <b>Dr. Sangita Khan </b><br>
                     <a href="EMODrDetails"><button>Details</button></a> <br>

                    2. <b>Dr. Aziz Seikh </b>  <br>
                    <a href="EMODrDetails"><button>Details</button></a> <br>
                    3. <b>Dr. Sanjita Prema </b>  <br>
                    <a href="EMODrDetails"><button>Details</button></a> <br>
                    4. <b>Dr. Kaniz Fatema </b>  <br>
                    <a href="EMODrDetails"><button>Details</button></a> <br>
                    5. <b>Dr. Nadia Yeasmin </b>  <br>
                    <a href="EMODrDetails"><button>Details</button></a> <br>
                    6. <b>Dr. Shahana Parvin </b>  <br>
                    <a href="EMODrDetails"><button>Details</button></a> <br>
                    7. <b>Dr. Nasrin Sultana </b>  <br>
                    <a href="EMODrDetails"><button>Details</button></a> <br>
                    
                    <a href="{{url('/allDoctors')}}"><button>More </button></a> <br>

                    <h4> Looking for a scheduled appointment? </h4>
                    
                    <h3> Specialist </h3>
                    1. <b>Dr. Mahmudul Islam </b><br>
                    <a href="SpecialistDrDetails"><button>Details</button></a> <br>

                    2. <b>Dr. Ahsan Habib</b> 
                    <br> <button>Details</button><br>
                    
                    3. <b>Dr. Israt Islam Srabonee </b> <br><button>Details</button><br>
                    
                    4. <b>Dr. Hasan Sarif</b><br><button>Details</button> </br>

                    5. <b>Dr. Aman Ullah</b><br><button>Details</button> </br>

                    6. <b>Dr. Iftekar Rafiq</b><br><button>Details</button> </br>

                    7. <b>Dr. Ramisa Joyee </b><br><button>Details</button> </br>

                    8. <b>Dr. Lamia Hasan </b><br><button>Details</button> </br>
                    <button>More </button> <br>

                   
                   <h4> Upcomming Appointments:</h4> 
                    1. Appointment with <b> Dr. Ahsan Habib<br> </b>
                    <a href="appointmentDetails"><button>Details</button></a><br>

                    2. Appointment with <b> Dr.Hasan Sarif<br> </b>
                    <button>Details</button><br>
                    <button>More </button> <br>

                    <h3>Patient list: </h3>
                    1. Afla Khatun<br>
                    <a href="patientDetails"><button>Details</button></a><br>

                    2. Jobayda Hoque<br>
                    <button>Details</button><br>
                    
                    3. Tafannun Ali <br>
                    <button>Details</button><br>

                    4. Imtiaz Uddin <br>                   
                     <button>Details</button><br>
                     <button>More </button> <br>

                    <h3>Generate meet link: </h3>
                    <a href="generateMeetLink"><button>generate meet link </button></a> <br>


                   <h3> All Payments: </h3>
                    1. Mobile Banking<br>
                    <a href="mobileBankingPaymentDetails"><button>Payment Details</button></a> <br>
                    1. ATM Cards <br>
                    <a href="paymentDetails"><button>Payment Details</button></a> <br>
                    <br>
                    <b>Total Patient Count </b> : 2048 <br>
                    <b> Total Doctor Count </b> : 185 <br>
                   <b> Current Balance :  <button>View </button> <br>
                    
                    <h3 style="padding-bottom: 100px;">

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
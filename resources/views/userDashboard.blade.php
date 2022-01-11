<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in patient!

                    Currently Available Doctors : <br>
                   <h4> Need an appointment right now? </h4>
                    <h3> E.M.O </h3>
                    1. <b>Dr. Sangita Khan </b><br>
                     <a href="EMODrDetails"><button>Details</button></a> <a href="bookEMODr"><button>Book</button></a><br>
                    2. <b>Dr. Aziz Seikh </b>  <br>
                    <a href="EMODrDetails"><button>Details</button></a> <button>Book </button> <br>
                    3. <b>Dr. Sanjita Prema </b>  <br>
                    <a href="EMODrDetails"><button>Details</button></a> <button>Book </button> <br>
                    4. <b>Dr. Kaniz Fatema </b>  <br>
                    <a href="EMODrDetails"><button>Details</button></a><button>Book </button> <br>
                    5. <b>Dr. Nadia Yeasmin </b>  <br>
                    <a href="EMODrDetails"><button>Details</button></a><button>Book </button> <br>
                    6. <b>Dr. Shahana Parvin </b>  <br>
                    <a href="EMODrDetails"><button>Details</button></a><button>Book </button> <br>
                    7. <b>Dr. Nasrin Sultana </b>  <br>
                    <a href="EMODrDetails"><button>Details</button></a><button>Book </button> <br>
                    <button>More </button> <br>

                    <h4> Looking for a scheduled appointment? </h4>
                    
                    <h3> Specialist </h3>
                    1. <b>Dr. Mahmudul Islam </b><br>
                    <a href="SpecialistDrDetails"><button>Details</button></a><a href="bookSpecialist"><button>Book</button></a><br>

                    2. <b>Dr. Ahsan Habib</b> 
                    <br> <button>Details</button> <button>Book </button><br> 
                    
                    3. <b>Dr. Israt Islam Srabonee </b> <br><button>Details</button><button>Book </button><br>
                    
                    4. <b>Dr. Hasan Sarif</b><br><button>Details</button><button>Book </button> </br>

                    5. <b>Dr. Aman Ullah</b><br><button>Details</button><button>Book </button> </br>

                    6. <b>Dr. Iftekar Rafiq</b><br><button>Details</button><button>Book </button> </br>

                    7. <b>Dr. Ramisa Joyee </b><br><button>Details</button><button>Book </button> </br>

                    8. <b>Dr. Lamia Hasan </b><br><button>Details</button> <button>Book </button></br>
                    <button>More </button> <br>

                    Pervious Appointments:<br>
                    1. Appointment with Dr. Ahsan habib <br>
                    <a href="appointmentDetails"><button>Details</button></a><br>
                    
                    Your Prescriptions:<br>
                    1. Prescription 1 <br>
                    <a href="prescriptionDetails"><button>Prescription Details</button></a><button>View</button><br> 

                    Your Reports: <br>
                    1. ECG report <br>
                    <a href="reportDetails"><button>Report Details</button></a><button>View </button><br>
                    2. Blood test  report<br>
                    <a href="reportDetails"><button>Report Details</button></a><button>View </button><br> 
                    <button>More </button>
                    <h3 style="padding-bottom: 100px;">

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</x-app-layout>
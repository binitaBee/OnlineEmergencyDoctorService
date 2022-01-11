<x-app-layout>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Patient Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3>Appointment with Dr. Ahsan Habib Details</h1>
                        Date : 15/11/21 <br>
                        Time : 10:15 am <br>
                        Recording : <button>View</button> <button>Download</button> <br>
                        Prescription : <button>View</button> <button>Download</button> <br>
                        Advices : <p>1. Drink not more then   ltr water in a day <br>
                        2. Avoid all types of Seeds and lentils from meal <br>
                        3. No hard and soft  Drinks <br></p>
                        Refer to : <b>Nephrologist </b> <br >
                        Next Visit date : <br> 
                        <h3 style="padding-bottom: 100px;">


                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</x-app-layout>
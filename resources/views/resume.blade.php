<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Htet Aung Khant's CV</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style type="text/css">
        @page {
            size: A4;
            margin: 0;
        }

        @media print {

            html,
            body {
                width: 250mm;
                height: 297mm;
            }

            .page {
                margin: 0;
                border: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
            }

            .no-print {
                display: none;
            }
        }
    </style>
</head>

<body class="bg-gray-100 print:bg-white">
    <!-- A4 Page Container -->
    <div class="page bg-white w-[250mm] min-h-xl mx-auto my-8 shadow-lg p-10 print:p-0 print:shadow-none">

        <!-- CV Content -->
        <div class="h-full flex flex-col">
            <!-- Header Section -->
            <header class="p-2 print:p-8 flex justify-between">
                <div>
                    <h1 class="text-4xl font-bold mb-2 text-slate-600">{{ $resume->name }}</h1>
                    <p class="text-xl text-slate-500">{{ $resume->position }}</p>
                </div>
                <div class="rounded-full bg-white w-32 h-32 flex items-center justify-center">
                    <img src="{{ asset('images/me.png') }}" alt="Profile Picture" class="w-32 h-32 rounded-full">
                </div>
            </header>

            <!-- Main Content (2-column layout) -->
            <div class="flex flex-1">
                <!-- Left Column -->
                <div class="w-1/3 bg-gray-50 p-6 print:p-8">
                    <!-- Contact Info -->
                    <section class="mb-8">
                        <h2 class="text-xl font-bold mb-4 text-slate-700 border-b-2 border-slate-700 pb-1">Contact</h2>
                        <div class="space-y-3">
                            <p class="flex items-center">
                                <i class="fas fa-phone w-5 h-5 mr-2 text-slate-600"></i>
                                {{ $resume->phone }}
                            </p>
                            <p class="flex items-center">
                                <i class="fas fa-envelope w-5 h-5 mr-2 text-slate-600"></i>
                                {{ $resume->user->email }}
                            </p>
                            <p class="flex items-center">
                                <i class="fas fa-map-marker-alt w-5 h-5 mr-2 text-slate-600"></i>
                                {{ $resume->address }}
                            </p>
                            <p class="flex items-center">
                                <i class="fas fa-globe w-5 h-5 mr-2 text-slate-600"></i>
                                <a href="{{ $resume->website }}" target="_blank">www.hakhant.site</a>
                            </p>
                            <p class="flex items-center">
                                <i class="fab fa-linkedin w-5 h-5 mr-2 text-slate-600"></i>
                                <a href="{{ $resume->linkedin }}" target="_blank">Htet Aung Khant</a>
                            </p>
                            <p class="flex items-center">
                                <i class="fab fa-github w-5 h-5 mr-2 text-slate-600"></i>
                                <a href="{{ $resume->github }}" target="_blank">hakhant21</a>
                            </p>
                        </div>
                    </section>
                    <!-- Education -->
                    <section class="mb-8">
                        <h2 class="text-xl font-bold mb-4 text-slate-700 border-b-2 border-slate-700 pb-1">Educations
                        </h2>
                        <div class="space-y-4">
                            @foreach($resume->educations as $education)
                            <div>
                                <p class="font-semibold">{{ $education->degree }}</p>
                                <p class="text-gray-600">{{ $education->institution }}</p>
                                <p class="text-sm text-gray-500">{{ date('M Y', strtotime($education->start_date)) }} -
                                    {{ date('M Y', strtotime($education->end_date)) }}</p>
                            </div>
                            @endforeach
                        </div>
                    </section>
                    <section class="mb-8">
                        <h2 class="text-xl font-bold mb-4 text-slate-700 border-b-2 border-slate-700 pb-1">Skills</h2>
                        <div class="grid grid-cols-3 gap-2 justify-items-start">
                            @foreach($resume->skills as $skill)
                            <div class="flex flex-col items-center">
                                <img src="{{ asset($skill->icon) }}" alt="{{ $skill->name }}" class="w-6 h-6">
                                <p>
                                    @if($skill->level == 1)
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    @elseif($skill->level == 1.5)
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    <small><i class="w-2 h-1 fas fa-star-half text-slate-500"></i></small>
                                    @elseif($skill->level == 2)
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    @elseif($skill->level == 2.5)
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    <small><i class="w-2 h-1 fas fa-star-half text-slate-500"></i></small>
                                    @elseif($skill->level == 3)
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    @elseif($skill->level == 3.5)
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    <small><i class="w-2 h-1 fas fa-star-half text-slate-500"></i></small>
                                    @elseif($skill->level == 4)
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    @elseif($skill->level == 4.5)
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    <small><i class="w-2 h-1 fas fa-star-half text-slate-500"></i></small>
                                    @elseif($skill->level == 5)
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    <small> <i class="w-2 h-1 fas fa-star text-slate-500"></i></small>
                                    @endif
                                </p>
                            </div>
                            @endforeach
                        </div>
                    </section>
                    <section class="mb-8">
                        <h2 class="text-xl font-bold mb-4 text-slate-700 border-b-2 border-slate-700 pb-1">Languages
                        </h2>
                        <div class="space-y-1">
                            @foreach($resume->languages as $language)
                            <div>
                                <p class="font-semibold">{{ $language->name }}</p>
                            </div>
                            @endforeach
                        </div>
                    </section>
                </div>

                <!-- Right Column -->
                <div class="w-2/3 p-6 print:p-8">
                    <!-- Profile -->
                    <section class="mb-8">
                        <h2 class="text-xl font-bold mb-4 text-slate-700 border-b-2 border-slate-700 pb-1">About Me</h2>
                        <p class="text-gray-700">
                            {!! $resume->bio !!}
                        </p>
                    </section>

                    <!-- Experience -->
                    <section class="mb-8">
                        <h2 class="text-xl font-bold mb-4 text-slate-700 border-b-2 border-slate-700 pb-1">Experiences
                        </h2>
                        <div class="space-y-6">
                            @foreach($resume->experiences as $experience)
                            <div>
                                <div class="flex justify-between">
                                    <p class="font-bold">{{ $experience->title }}</p>
                                    <p class="text-gray-600">{{ date('M Y', strtotime($experience->start_date)) }} - {{
                                        $experience->is_current ? 'Present' : date('M Y',
                                        strtotime($experience->end_date)) }}</p>
                                </div>
                                <p class="text-slate-600 font-semibold mb-2">{{ $experience->company }} - {{
                                    $experience->location }}</p>
                                <p>{!! $experience->description !!}</p>
                            </div>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- Print Button (hidden when printing) -->

</body>

</html>

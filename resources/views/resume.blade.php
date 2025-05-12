<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            width: 100%;
            margin: 10px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .header-table {
            width: 100%;
        }

        .info-table {
            width: 100%;
            border-collapse: collapse;
        }

        .info-table td {
            padding: 3px 0px;
            vertical-align: top;
        }

        .info-table td:first-child {
            font-weight: bold;
            width: 120px;
        }

        .info-table a {
            color: #1a73e8;
            text-decoration: none;
        }

        .info-table a:hover {
            text-decoration: underline;
        }

        .header-details {
            vertical-align: top;
            padding-right: 10px;
        }

        .header-img {
            width: 100px;
            height: 100px;
            overflow: hidden;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .header-details h1 {
            font-size: 24px;
            margin: 0 0 5px 0;
            color: #444;
        }

        .header-details p {
            font-size: 16px;
            font-weight: 400;
            margin: 0;
            padding-bottom: 5px;
            color: #000;
        }

        .section {
            margin-bottom: 5px;
        }

        .section h2 {
            font-size: 20px;
            color: #444;
            border-bottom: 2px solid #f4f4f4;
            padding-bottom: 5px;
        }

        .section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .section ul li {
            margin-bottom: 5px;
            line-height: 1.2;
        }

        .section ul li span {
            font-weight: bold;
            color: #555;
        }

        .section ul li .description {
            font-size: 14px;
            color: #666;
            word-wrap: break-word;
        }

        .skills {
            display: inline-block;
            margin: 0 -5px;
        }

        .skill {
            background: #e0e0e0;
            padding: 5px 5px;
            border-radius: 5px;
            font-size: 14px;
            color: #555;
            display: inline-block;
            margin: 5px;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 12px;
            color: #999;
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header Section -->
        <table class="header-table">
            <div class="section">
                <h2>Personal Information</h2>
            </div>
            <tr>
                <td class="header-details">
                    <table class="info-table">
                        <tr>
                            <td><strong>Name</strong></td>
                            <td>{{ $resume->name }}</td>
                        </tr>
                        <tr>
                            <td><strong>Position</strong></td>
                            <td>{{ $resume->position }}</td>
                        </tr>
                        <tr>
                            <td><strong>Email</strong></td>
                            <td>{{ $resume->email }}</td>
                        </tr>
                        <tr>
                            <td><strong>Phone</strong></td>
                            <td>{{ $resume->phone }}</td>
                        </tr>
                        <tr>
                            <td><strong>Address</strong></td>
                            <td>{{ $resume->address }}</td>
                        </tr>
                        <tr>
                            <td><strong>Github</strong></td>
                            <td><a href="https://github.com/hakhant21" target="_blank">{{ $resume->github }}</a></td>
                        </tr>
                        {{-- <tr>
                            <td><strong>Website</strong></td>
                            <td><a href="https://hakhant.tech" target="_blank">{{ $resume->website }}</a></td>
                        </tr> --}}
                    </table>
                </td>
                {{-- <td>
                    <div class="header-img">
                        <img src="{{ $resume->image }}" alt="Profile Image">
                    </div>
                </td> --}}
            </tr>
        </table>

        <!-- Profile Section -->
        <div class="section">
            <h2>About me</h2>
            <p>
                {!! $resume->aboutme !!}
            </p>
        </div>


        <div class="section">
            <h2>Experience</h2>
            <ul>
                @foreach($sectionItems['experiences'] as $item)
                    <li>
                        <div>
                            <span>{{ $item['title'] }}</span> - {{ $item['company'] }} ({{ date('d/m/Y', strtotime($item['start_date'])) }} - {{ $item['end_date'] ? date('d/m/Y', strtotime($item['end_date'])) : 'Present' }})
                            <p class="description">{!! $item['description'] !!} </p>
                        </div>
                        <hr>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="section">
            <h2>Education</h2>
            <ul>
                @foreach($sectionItems['educations'] as $item)
                    <li>
                        <span>{{ $item['title'] }}</span> - {{ date('d/m/Y', strtotime($item['end_date'])) }}
                        <p></p>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="section">
            <h2>Skills</h2>
            <div class="skills">
                @foreach($sectionItems['skills'] as $item)
                    <div class="skill">{{ $item['title'] }}</div>
                @endforeach
            </div>
        </div>


        <div class="section">
            <h2>Languages</h2>
            <ul>
                @foreach($sectionItems['languages'] as $item)
                    <li>
                        <span>{{ $item['title'] }}</span>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
</body>

</html>

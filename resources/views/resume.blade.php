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
            border-radius: 50px;
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
            margin-bottom: 20px;
        }

        .section h2 {
            font-size: 20px;
            margin-bottom: 10px;
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
            margin-bottom: 10px;
            line-height: 1.6;
        }

        .section ul li span {
            font-weight: bold;
            color: #555;
        }

        .skills {
            display: inline-block;
            margin: 0 -5px;
        }

        .skill {
            background: #e0e0e0;
            padding: 5px 10px;
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
                            <td>Htet Aung Khant</td>
                        </tr>
                        <tr>
                            <td><strong>Position</strong></td>
                            <td>Senior Backend Developer</td>
                        </tr>
                        <tr>
                            <td><strong>Email</strong></td>
                            <td>johndoe@example.com</td>
                        </tr>
                        <tr>
                            <td><strong>Phone</strong></td>
                            <td>(123) 456-7890</td>
                        </tr>
                        <tr>
                            <td><strong>Address</strong></td>
                            <td>City, Country</td>
                        </tr>
                        <tr>
                            <td><strong>Github</strong></td>
                            <td><a href="https://github.com/hakhant21" target="_blank">hakhant21</a></td>
                        </tr>
                        <tr>
                            <td><strong>Website</strong></td>
                            <td><a href="https://hakhant.tech" target="_blank">hakhant.tech</a></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <img src="images/profile.jpg" alt="Profile Picture" class="header-img">
                </td>
            </tr>
        </table>

        <!-- Profile Section -->
        <div class="section">
            <h2>About me</h2>
            <p>
                Motivated professional with extensive experience in [Your Field].
                Skilled at delivering results in fast-paced environments while maintaining quality.
            </p>
        </div>

        <!-- Work Experience Section -->
        <div class="section">
            <h2>Work Experience</h2>
            <ul>
                <li>
                    <span>Job Title 1</span> - Company Name (Start Date - End Date)
                    <p>Brief description of responsibilities and achievements in this role.</p>
                </li>
                <li>
                    <span>Job Title 2</span> - Company Name (Start Date - End Date)
                    <p>Brief description of responsibilities and achievements in this role.</p>
                </li>
            </ul>
        </div>

        <!-- Education Section -->
        <div class="section">
            <h2>Education</h2>
            <ul>
                <li>
                    <span>Degree</span> - Institution Name (Year)
                    <p>Additional information if applicable.</p>
                </li>
            </ul>
        </div>

        <!-- Skills Section -->
        <div class="section">
            <h2>Skills</h2>
            <div class="skills">
                <div class="skill">Skill 1</div>
                <div class="skill">Skill 2</div>
                <div class="skill">Skill 3</div>
                <div class="skill">Skill 4</div>
            </div>
        </div>

        <div class="page-break"></div>
        <!-- Language Section -->
        <div class="section">
            <h2>Language</h2>
            <ul>
                <li>
                    <span>Degree</span> - Institution Name (Year)
                    <p>Additional information if applicable.</p>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>

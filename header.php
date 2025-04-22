<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamus Indonesia ↔ Dayak Ma'anyan</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f5f7fa;
            padding: 0;
            margin: 0;
        }

        /* Header Styling */
        .header {
            background-color: #2d89ef;
            color: white;
            padding: 15px 0;
            text-align: center;
            font-size: 24px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        /* Container Styling */
        .container {
            max-width: 600px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        /* Footer Styling */
        .footer {
            background-color: #2d89ef;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        /* Form Styling */
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input[type="text"],
        select {
            padding: 12px;
            font-size: 16px;
            border-radius: 8px;
            border: 1px solid #ccc;
            width: 100%;
        }

        button {
            padding: 12px;
            font-size: 16px;
            background-color: #2d89ef;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        button:hover {
            background-color: #1b66c9;
        }

        /* Hasil Styling */
        .hasil {
            margin-top: 20px;
            font-size: 18px;
            background: #e6f0ff;
            padding: 10px 15px;
            border-left: 5px solid #2d89ef;
            border-radius: 5px;
        }

        /* Link Styling */
        .tambah-link {
            display: block;
            text-align: center;
            margin-top: 25px;
            text-decoration: none;
            color: #2d89ef;
            font-weight: bold;
        }

        .tambah-link:hover {
            text-decoration: underline;
        }

        /* Responsive Design for Mobile and Tablets */
        @media (max-width: 768px) {
            .header {
                font-size: 20px;
            }

            .container {
                margin: 20px;
                padding: 20px;
            }

            input[type="text"],
            select {
                font-size: 14px;
            }

            button {
                font-size: 14px;
                padding: 10px;
            }
        }

        @media (max-width: 480px) {
            .header {
                font-size: 18px;
            }

            .container {
                margin: 15px;
                padding: 15px;
            }

            input[type="text"],
            select {
                font-size: 14px;
            }

            button {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
    Kamus Indonesia ↔ Dayak Ma'anyan
    </div>

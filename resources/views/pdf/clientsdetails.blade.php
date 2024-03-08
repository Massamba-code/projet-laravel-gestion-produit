<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>client Details</title>

    <style>
        table {
            width: 95%;
            border-collapse: collapse;
            margin: 50px auto;
        }

        /* Zebra striping */
        tr:nth-of-type(odd) {
            background: #eee;
        }

        th {
            background: #3498db;
            color: white;
            font-weight: bold;
        }

        td,
        th {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
            font-size: 18px;
        }


    </style>

</head>

<body>

<div style="width: 95%; margin: 0 auto;">
    <div style="width: 10%; float:left; margin-right: 20px;">
        <img src="{{ public_path('assets/images/logo.png') }}" width="100%"  alt="">
    </div>
    <div style="width: 50%; float: left;">
        <h1>listes de clients</h1>
    </div>
</div>

<table style="position: relative; top: 50px;">
    <thead>
    <tr>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Numero</th>
        <th>Adresse</th>
        <th>Sexe</th>
        <th>DATE</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($clients as $client)
        <tr>
            <td data-column="First Name">{{ $client->prenom }}</td>
            <td data-column="Last Name">{{ $client->nom }}</td>
            <td data-column="Email" style="color: dodgerblue;">
                {{ $client->numero }}
            </td>
            <td data-column="Last Name">{{ $client->adresse }}</td>
            <td data-column="Email" style="color: dodgerblue;">
                {{ $client->sexe }}
            </td>
            <td data-column="Date">
                {{ date('F j, Y', strtotime($client->create_at)) }}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>

</html>
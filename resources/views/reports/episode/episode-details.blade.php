<!DOCTYPE html>
<html>
<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>
<body>

<h1>Vekpod Episodes</h1>

<table id="customers">
    <tr>
        <th>Id</th>
        <th>Cover Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Author</th>
        <th>Podcast</th>
    </tr>
    @foreach($episodes as $episode)
    <tr>
        <td>{{$episode->id}}</td>
        <td>{{$episode->cover_image}}</td>
        <td>{{$episode->name}}</td>
        <td>{{$episode->description}}</td>
        <td>{{$episode->author}}</td>
        <td>{{$episode->podcast_name}}</td>
    </tr>
    @endforeach

</table>

</body>
</html>



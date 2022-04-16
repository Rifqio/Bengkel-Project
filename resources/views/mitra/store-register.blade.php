<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title>Form Store Register</title>
</head>

<body>
    @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
    @endif
    <!--Notification-->
    @if (auth()->user()->unreadnotifications)
        <a href="{{url('mark-read')}}">tandai sudah dibaca</a><br>
    @endif
    @forelse ($user->unreadnotifications as $n)
        {{$n->data['notif']}}
    @empty
        <h5>Belum Ada Notifikasi</h5>
    @endforelse
    <!--Kurang Form Input File-->
    <form action="{{url('store-register')}}" method="POST" enctype="multipart/form-data"> 
        @csrf
        <input type="text" name="store_name" placeholder="Nama Bengkel"><br>
        <input type="time" name="open" placeholder="Jam Buka"><br>
        <input type="time" name="close" placeholder="Jam Tutup"><br>
        <input type="number" name="phone_store" placeholder="No Telp Bengkel"><br>
        <textarea name="address" cols="30" rows="10" placeholder="Alamat Bengkel"></textarea>
        <input type="hidden" name="store_image" value="Dummy"><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
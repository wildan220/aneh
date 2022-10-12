<!DOCTYPE html>
<html>

<head>
    <style>
    #merk {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #merk td,
    #merk th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #merk tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #merk tr:hover {
        background-color: #ddd;
    }

    #merk th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #3383F1;
        color: white;
    }
    </style>
</head>
<div style="margin-left: 20px">
    <center>
        <div style="font-size: 20px; margin-bottom: 5px;">UNIVERSAL LEAF TOBACCO COMPANY</div>
        <div style="font-size: 24px; margin-bottom: 5px;"><b>PT. Tempu Rejo</b></div>
        <div style="font-size: 14px">Jl. P.B. Sudirman No.110 Kec. Pakusari, Kab. Jember || No. Telp 08xxxxxxxxxx</div>
    </center>
</div>
<hr styles="border: 1px solid black; margin: 10px 5px 10px 5px;">
<body>

    <center>
        <h2>Laporan Daftar Merk Barang</h2>
    </center>

    <table id="merk">
        <tr>
            <th>NO</th>
            <th>KODE MERK</th>
            <th>MERK</th>
        </tr>
        <tr>
            @foreach($merk as $m)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$m->kode_merk}}</td>
            <td>{{$m->nama_merkbarang}}</td>
        </tr>
        @endforeach
        </tr>
    </table>

</body>

</html>
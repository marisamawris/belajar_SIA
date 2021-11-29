<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Grafik Mata Kuliah</title>
</head>

<body>
    <h1>Grafik Mata Kuliah</h1>
    <div id="container"></div>
</body>

<script src="https://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript">
    var userData = <?php echo json_encode($userData)?>;

    Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Data Mata Kuliah Yang Diambil Oleh Mahasiswa Fasilkom'
    },
    subtitle: {
        text: 'Source: <a href="http://en.wikipedia.org/wiki/List_of_cities_proper_by_population">Wikipedia</a>'
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Mahasiswa'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'Jumlah Mahasiswa: <b>{point.y:.0f} orang</b>'
    },
    series: [{
        name: 'Population',
        data: [
            ['Aljabar Linear', 56],
            ['Bahasa Indonesia', 52],
            ['Bahasa Inggris I', 74],
            ['CCNA R&S', 52],
            ['Kewarganegaraan', 63],
            ['Pemrograman Web Enterprise', 25],
            ['Komputer Masyarakat', 52],
            ['Rekayasa Sistem Informasi', 41],
            ['Analisa Berorientasi Objek', 53],
            ['Pendidikan Agama Katolik', 25],
            ['Pendidikan Agama Islam', 45],
            ['Pendidikan Agama Kristen', 44],
            ['Pendidikan Agama Konghucu', 52],
            ['Pendidikan Agama Hindu', 23],
            ['Pendidikan Agama Buddha', 53],
            ['Pancasila', 25],
            ['Algoritma', 53],
            ['Logika Matematika', 53],
            ['Manajemen Proyek Sistem Informasi', 26],
            ['Pemrograman PL/SQL', 52]
        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});
              
              
</script>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <canvas id="myChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>

        let dht = []

        fetch('http://mukashev.hopto.org/api/dht?limit=734')
            .then((response) => {
                return response.json();
            })
            .then(function (result) {
                let dht = []
                dht = result.data.reverse()

                const data = {
                    labels: dht.map(c => new Date(c.created_at).toLocaleTimeString()),
                    datasets: [
                        {
                            label: 'Влажность (%)',
                            type: 'line',
                            backgroundColor: 'rgb(0, 0, 255)',
                            borderColor: 'rgb(0, 0, 255)',
                            data: dht.map(c => c.humidity)
                        },
                        {
                            label: 'Температра (°C)',
                            type: 'line',
                            backgroundColor: 'rgb(255, 0, 0)',
                            borderColor: 'rgb(255, 0, 0)',
                            data: dht.map(c => c.temperature)
                        },
                        {
                            label: 'Тепловой индекс (°C)',
                            type: 'line',
                            backgroundColor: 'rgb(0, 255, 0)',
                            borderColor: 'rgb(0, 255, 0)',
                            data: dht.map(c => c.heat_index)
                        }
                    ]
                };

                const config = {
                    data: data,
                    options: {}
                };
                const myChart = new Chart(
                    document.getElementById('myChart'),
                    config
                );
            });
    </script>
</body>

</html>
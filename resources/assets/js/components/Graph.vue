<template>
    <canvas id="graph"></canvas>
</template>

<script>
    import Chart from 'chart.js'
    export default {
        props: ['labels','values'],
        mounted() {
            console.log('Component mounted.')
            var data = {
                labels: this.labels,
                datasets: [
                    {
                        data: this.values
                    }
                ]
            }
            var context = document.querySelector('#graph').getContext('2d')
            new Chart(context,{
                type: "bar",
                data: data,
            })
        }
    }
</script>
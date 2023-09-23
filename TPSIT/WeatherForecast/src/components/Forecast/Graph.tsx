import {
    Chart as ChartJS,
    CategoryScale,
    LinearScale,
    PointElement,
    LineElement,
    Title,
    Tooltip,
    Filler,
    Legend,
    ChartData,
    Point,
    ChartOptions,
} from 'chart.js';
import { Line } from 'react-chartjs-2';
import { HourlyData } from '../../weatherApi/api';

ChartJS.register(
    CategoryScale,
    LinearScale,
    PointElement,
    LineElement,
    Title,
    Tooltip,
    Filler,
    Legend
);

export const options: ChartOptions<"line"> = {
    responsive: true,
    plugins: {
        legend: {
            position: 'top' as const,
        },

    },
};

interface Props {
    hourlyData: HourlyData;
}

const Graph = (props: Props) => {
    const convertToLocale = (): string[] => {
        let time: string[] = [];
        props.hourlyData.time.forEach((element) => {
            time.push(new Date(element).getHours() + ":00")
        })
        return time;
    }
    const time = convertToLocale();
    const data: ChartData<"line", (number | Point | null)[], unknown> = {
        labels: time,
        datasets: [
            {
                fill:true,
                data:props.hourlyData.temperature_2m,
                borderColor: 'rgb(53, 255, 53)',
                backgroundColor: 'rgba(53, 255, 53, 0.2)',
                pointBackgroundColor: "white",
                label: "Temperature",
            },
            {
                fill:true,
                data:props.hourlyData.apparent_temperature,
                borderColor: 'rgb(0, 147, 150)',
                backgroundColor: 'rgba(0, 147, 150, 0.2)',
                pointBackgroundColor: "white",
                label: "Apparent temperature"
            },
            {
                fill:true,
                data:props.hourlyData.relativehumidity_2m,
                borderColor: 'rgb(0, 0, 235)',
                backgroundColor: 'rgba(0, 0, 235, 0.2)',
                pointBackgroundColor: "white",
                label: "Relative humidity",
                hidden: true
            },
            {
                fill:true,
                data:props.hourlyData.precipitation_probability,
                borderColor: 'rgb(0, 0, 235)',
                backgroundColor: 'rgba(0, 0, 235, 0.2)',
                pointBackgroundColor: "white",
                label: "Precipitation probability",
                hidden: true
            },
            {
                fill:true,
                data:props.hourlyData.windspeed_10m,
                borderColor: 'rgb(181, 247, 255)',
                backgroundColor: 'rgba(181, 247, 255, 0.2)',
                pointBackgroundColor: "white",
                label: "Wind speed",
                hidden: true
            },
            {
                fill:true,
                data:props.hourlyData.uv_index,
                borderColor: 'rgb(255, 190, 0)',
                backgroundColor: 'rgba(255, 190, 0, 0.2)',
                pointBackgroundColor: "white",
                label: "UV Index",
                hidden: true
            },
            {
                fill:true,
                data:props.hourlyData.surface_pressure,
                borderColor: 'rgb(150, 75, 0)',
                backgroundColor: 'rgba(150, 75, 0, 0.2)',
                pointBackgroundColor: "white",
                label: "Surface Pressure",
                hidden: true
            },
            {
                fill:true,
                data:props.hourlyData.visibility,
                borderColor: 'rgb(0, 247, 255)',
                backgroundColor: 'rgba(0, 247, 255, 0.2)',
                pointBackgroundColor: "white",
                label: "Visibility",
                hidden: true
            },
        ]
        
    }
    
    return (
        <Line className="mx-auto" options={options} data={data} />
    )
 }

export default Graph;
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

export const options = {
    responsive: true,
    plugins: {
        legend: {
            position: 'top' as const,
        },
        title: {
            display: true,
            text: 'Chart.js Line Chart',
        },
    },
};

interface Props {
    hourlyData: HourlyData;
}

const Graph = (props: Props) => {
    const time = props.hourlyData.time;
    const data = {
        time,
        datasets: [
          {
            fill: true,
            label: 'Dataset 2',
            data: props.hourlyData.is_day,
            borderColor: 'rgb(53, 162, 235)',
            backgroundColor: 'rgba(53, 162, 235, 0.5)',
          },
        ],
      };
    return (
        <>
        <Line className="max-h-48" options={options} data={data} />
        </>
    )
 }

export default Graph;
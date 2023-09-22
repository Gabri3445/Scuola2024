import ForecastSingleElement from "./ForecastSingleElement";

interface Props {
    date: Date;
    temperature: number[];
    precipitation: number;
    wmo: string
}

const ForecastModal = ({ date, temperature, precipitation, wmo }: Props) => {
    return (

        <div className="w-3/4 h-3/4 text-white flex flex-col text-4xl bg-gray-900 border-2 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 border-white rounded-2xl ml-auto mr-auto">
            <div className="w-full">
                <div className="w-3/4 mx-auto">
                    <ForecastSingleElement date={date} temperature={temperature} precipitation={precipitation} wmo={wmo}></ForecastSingleElement>
                </div>
            </div>
            <div className="bg-red w-full flex-1">
                Graph goes here
            </div>
        </div>

    );

}

export default ForecastModal;
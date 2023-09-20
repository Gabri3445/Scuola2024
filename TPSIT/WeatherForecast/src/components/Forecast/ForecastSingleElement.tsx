import SingleElement from "./SingleElement";

interface Props {
    date: Date;
    temperature: number[];
    precipitation: number;

}

const ForecastSingleElement = ({ date, temperature, precipitation }: Props) => {
    const daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

    return (

        <>
            <div className="border-2 h-24 border-white rounded-lg mt-4 pb-2 flex flex-row justify-center items-center w-full cursor-pointer min-h-[24px]">
                <div className="mr-5">Icon here</div>
                <div className="mr-5">
                    {date.getDate()} - {daysOfWeek[date.getDay()]}
                </div>
                <SingleElement label="Min:" value={temperature[0] + "°"}></SingleElement>
                <SingleElement label="Max:" value={temperature[1] + "°"}></SingleElement>
                <SingleElement label="Precipitation:" value={precipitation + "%"}></SingleElement>
            </div>
        </>
    )
}

export default ForecastSingleElement;
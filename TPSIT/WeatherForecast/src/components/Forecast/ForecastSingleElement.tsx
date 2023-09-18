interface Props {
    date: Date;
}

const ForecastSingleElement = ({date}: Props) => {
    const daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    return (
        
        <>
        <div className="border-2 h-1/5 border-white rounded-lg mt-4 pb-2 flex flex-row justify-center items-center w-full">
                  {date.getDate()} - {daysOfWeek[date.getDay()]}
        </div>
        </>
    )
}

export default ForecastSingleElement;
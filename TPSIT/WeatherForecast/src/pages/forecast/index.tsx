import { useMemo, useEffect, useState } from "react";
import { useLocation } from "react-router-dom";
import { LocationData, getForecastTemperature } from "../../weatherApi/api";

const forecast = () => {
    function useQuery() {
        const { search } = useLocation();

        return useMemo(() => new URLSearchParams(search), [search]);
    }

    const [forecast, setForecast] = useState<LocationData>()

    useEffect(() => {
        async function getForecast() {
            setForecast(await getForecastTemperature(latitude, longitude))
        }
        getForecast()
    }, [])

    const latitude = parseInt(useQuery().get("lat") ?? "0")
    const longitude = parseInt(useQuery().get("lon") ?? "0")

    return (
        <>
        
        </>
    )
}

export default forecast;
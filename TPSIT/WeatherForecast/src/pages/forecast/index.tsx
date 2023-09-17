import { useMemo } from "react";
import { useLocation } from "react-router-dom";
import Weather from "../../components/Forecast/Weather";

const forecast = () => {
   function useQuery() {
        const { search } = useLocation();

        return useMemo(() => new URLSearchParams(search), [search]);
    }

    const latitude = parseInt(useQuery().get("lat") ?? "0")
    const longitude = parseInt(useQuery().get("lon") ?? "0")

    return (
        <>
        <div className="w-full h-screen flex md:pt-0 bg-no-repeat flex-col bg-cover bg-[url('https://images.pexels.com/photos/557782/pexels-photo-557782.jpeg')]">
            <h1 className="text-white font-bold text-xl md:text-7xl text-center">Weather Forecast</h1>
            <Weather latitude={latitude} longitude={longitude} />
        </div>
        </>
    )
}

export default forecast;
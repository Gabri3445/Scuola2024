import { useMemo } from "react";
import { useLocation } from "react-router-dom";

const forecast = () => {
    function useQuery() {
        const { search } = useLocation();

        return useMemo(() => new URLSearchParams(search), [search]);
    }

    const latitude = parseInt(useQuery().get("lat") ?? "0")
    const longitude = parseInt(useQuery().get("lon") ?? "0")

    return (
        <>
        
        </>
    )
}

export default forecast;
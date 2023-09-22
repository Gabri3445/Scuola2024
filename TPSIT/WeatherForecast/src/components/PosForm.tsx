import { FormControlLabel, Switch } from "@mui/material";
import { ChangeEvent, useState } from "react"
import { useNavigate } from "react-router-dom"
import TextInput from "./Form/TextInput";
import MapInput from "./Form/MapInput";
const PosForm = () => {
    const [latitude, setLatitude] = useState<number | null>(null);
    const [longitude, setLongitude] = useState<number | null>(null);
    const [map, setMap] = useState<boolean>(true);
    const navigate = useNavigate();

    const handleLatitudeChange = (e: ChangeEvent<HTMLInputElement>) => {
        const lat = parseInt(e.target.value);
        if (lat > 90 || lat < -90) {
            setLatitude(null);
            return;
        }
        setLatitude(lat);
    }

    const handleLongitudeChange = (e: ChangeEvent<HTMLInputElement>) => {
        const lon = parseInt(e.target.value);
        if (lon > 180 || lon < -180) {
            setLongitude(null);
            return;
        }
        setLongitude(lon);
    }

    const submit = () => {
        if (latitude && longitude) {
            navigate(`forecast?lat=${latitude}&lon=${longitude}`)
        }
        else {
            alert("Invalid input");
            return;
        }
    }

    return (
        <>
            <FormControlLabel className="mt-5 text-white flex justify-center ml-0" control={<Switch onChange={() => setMap(!map)} checked={Boolean(map)} />} label="Map" labelPlacement="top"/>
            {map ? (
                <MapInput submit={submit} setLatitude={setLatitude} setLongitude={setLongitude}></MapInput>
            ) : (
                <TextInput handleLatitudeChange={handleLatitudeChange} handleLongitudeChange={handleLongitudeChange} submit={submit}></TextInput>
            )}
        </>
    )
}

export default PosForm
import { ChangeEvent, useState } from "react"
const PosForm = () => {
    const [latitude, setLatitude] = useState(0)
    const [longitude, setLongitude] = useState(0)

    const handleLatitudeChange = (e: ChangeEvent<HTMLInputElement>) => {
        const lat = parseInt(e.target.value);
        setLatitude(lat);
    }

    const handleLongitudeChange = (e: ChangeEvent<HTMLInputElement>) => {
        const lon = parseInt(e.target.value);
        setLongitude(lon);
    }

    const submit = () => {

    }

    return (
        <>
            <div className="mt-10 w-1/2 mr-auto ml-auto flex flex-col items-center">
                    <label htmlFor="lat" className="w-60 text-center text-white">Latitude:</label>
                    <input type="number" onChange={handleLatitudeChange} className="w-60 rounded-md" id="lat"/>
                    <label htmlFor="lon" className="w-60 text-center text-white">Longitude:</label>
                    <input type="number" onChange={handleLongitudeChange} className="w-60 rounded-md" id="lon"/>

                    <button onClick={submit} className="text-white bg-blue-700 w-40 h-10 mt-7 mr-auto ml-auto text-2xl rounded-md">Go!</button>
            </div>
        </>
    )
}

export default PosForm
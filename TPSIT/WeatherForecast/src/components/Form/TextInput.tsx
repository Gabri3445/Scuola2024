interface Props {
    handleLatitudeChange: (e: React.ChangeEvent<HTMLInputElement>) => void;
    handleLongitudeChange: (e: React.ChangeEvent<HTMLInputElement>) => void;
    submit: () => void;
}

const TextInput = ({handleLatitudeChange, handleLongitudeChange, submit}: Props) => {
    return (
        <div className="mt-5 w-1/2 mr-auto ml-auto flex flex-col items-center">
            <label htmlFor="lat" className="w-60 text-center text-white">Latitude:</label>
            <input type="number" max={90} min={-90} step={0.01} onChange={handleLatitudeChange} className="w-60 rounded-md" id="lat" />
            <label htmlFor="lon" className="w-60 text-center text-white">Longitude:</label>
            <input type="number" max={180} min={-180} step={0.01} onChange={handleLongitudeChange} className="w-60 rounded-md" id="lon" />

            <button onClick={submit} className="text-white bg-blue-700 w-40 h-10 mt-7 mr-auto ml-auto text-2xl rounded-md">Go!</button>
        </div>
    )
}

export default TextInput;

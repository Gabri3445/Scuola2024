interface Props {
    label: string;
    value: string;
}

const SingleElement = ({label, value}: Props) => {
    return (
        <div className="text-3xl flex flex-col items-start ml-2 mr-2 border-white border rounded-md p-5 m-1 3xl:m-0 3xl:border-none 3xl:p-0">
            <div className="text-center w-full">{label}</div>
            <div className="text-center w-full flex-1 flex items-center justify-center text-5xl">{value}</div>
        </div>
    )
}

export default SingleElement;
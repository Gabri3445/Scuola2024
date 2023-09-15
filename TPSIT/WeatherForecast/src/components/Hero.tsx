const Hero = ({children}) => {
    return (
        <>
        <div className="w-full h-screen flex justify-center bg-no-repeat flex-col bg-cover bg-[url('https://images.pexels.com/photos/2114014/pexels-photo-2114014.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')]">
            <h1 className="text-white font-bold text-7xl text-center">Weather Forecast</h1>
            <h2 className="subtitle text-white font-semibold text-6xl text-center">Get the best weather forecast for your location</h2>
            {children}
        </div>
        </>
    )
}

export default Hero
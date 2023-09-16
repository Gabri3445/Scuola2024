const Hero = ({children}: any) => {
    return (
        <>
            <div className="w-screen h-screen flex pt-12 md:pt-0 md:justify-center bg-no-repeat flex-col bg-cover bg-[url('https://images.pexels.com/photos/557782/pexels-photo-557782.jpeg')]">
                <h1 className="text-white font-bold text-xl md:text-7xl text-center">Weather Forecast</h1>
                <h2 className="subtitle text-white font-semibold text-lg md:text-6xl text-center">Get the best weather forecast for your location</h2>
                {children}
            </div>
        </>
    )
}

export default Hero
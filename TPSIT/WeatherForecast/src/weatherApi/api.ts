export const getForecastTemperature = async (latitude : number, longitude: number): Promise<LocationData> => {
    const url = `https://api.open-meteo.com/v1/forecast?latitude=${latitude}&longitude=${longitude}&hourly=temperature_2m&current_weather=true`;
    const response = await fetch(url);
    const data: LocationData = await response.json();
    return data;
}

interface CurrentWeather {
    temperature: number;
    windspeed: number;
    winddirection: number;
    weathercode: number;
    is_day: number;
    time: string; // ISO 8601 format
}

interface HourlyUnit {
    time: string; // ISO 8601 format
    temperature_2m: string; 
}

interface HourlyData {
    time: string[]; 
    temperature_2m: number[]; 
}

interface LocationData {
    latitude: number;
    longitude: number;
    generationtime_ms: number;
    utc_offset_seconds: number;
    timezone: string;
    timezone_abbreviation: string;
    elevation: number;
    current_weather: CurrentWeather;
    hourly_units: HourlyUnit;
    hourly: HourlyData;
}

export type {LocationData};

//https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&hourly=temperature_2m&current_weather=true
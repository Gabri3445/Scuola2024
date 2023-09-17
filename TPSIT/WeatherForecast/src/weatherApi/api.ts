
export const getForecastTemperature = async (latitude : number, longitude: number): Promise<WeatherData> => {
    const url = `https://api.open-meteo.com/v1/forecast?latitude=${latitude}&longitude=${longitude}&hourly=temperature_2m,apparent_temperature,precipitation_probability,weathercode,surface_pressure,visibility,windspeed_10m,uv_index,is_day&daily=weathercode,temperature_2m_max,temperature_2m_min,precipitation_probability_max&current_weather=true&timezone=auto`;
    const response = await fetch(url);
    const data: WeatherData = await response.json();
    return data;
}

interface CurrentWeather {
    temperature: number;
    windspeed: number;
    winddirection: number;
    weathercode: number;
    is_day: number;
    time: string;
  }
  
  interface HourlyUnits {
    time: string;
    temperature_2m: string;
    apparent_temperature: string;
    precipitation_probability: string;
    weathercode: string;
    surface_pressure: string;
    visibility: string;
    windspeed_10m: string;
    uv_index: string;
    is_day: string;
  }
  
  interface HourlyData {
    time: string[];
    temperature_2m: number[];
    apparent_temperature: number[];
    precipitation_probability: number[];
    weathercode: number[];
    surface_pressure: number[];
    visibility: number[];
    windspeed_10m: number[];
    uv_index: number[];
    is_day: number[];
  }
  
  interface DailyUnits {
    time: string;
    weathercode: string;
    temperature_2m_max: string;
    temperature_2m_min: string;
    precipitation_probability_max: string;
  }
  
  interface DailyData {
    time: string[];
    weathercode: number[];
    temperature_2m_max: number[];
    temperature_2m_min: number[];
    precipitation_probability_max: number[];
  }
  
  interface WeatherData {
    latitude: number;
    longitude: number;
    generationtime_ms: number;
    utc_offset_seconds: number;
    timezone: string;
    timezone_abbreviation: string;
    elevation: number;
    current_weather: CurrentWeather;
    hourly_units: HourlyUnits;
    hourly: HourlyData;
    daily_units: DailyUnits;
    daily: DailyData;
  }
  

export type {WeatherData};

//https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&hourly=temperature_2m,apparent_temperature,precipitation_probability,weathercode,surface_pressure,visibility,windspeed_10m,uv_index,is_day&daily=weathercode,temperature_2m_max,temperature_2m_min,precipitation_probability_max&current_weather=true&timezone=auto
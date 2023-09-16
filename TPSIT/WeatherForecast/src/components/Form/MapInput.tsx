import { useEffect, useState } from 'react';
import { MapContainer, TileLayer, Marker, Popup, useMap } from 'react-leaflet';
import 'leaflet/dist/leaflet.css';

interface Props {
    setLatitude: (lat: number) => void;
    setLongitude: (lon: number) => void;
    submit: () => void;
}

const Location = ({ userLocation }: any) => {
  const map = useMap();

  useEffect(() => {
    if (map && userLocation) {
      map.flyTo(userLocation, 8);
    }
  }, [map, userLocation]);

  /*return userLocation ? (
    <Marker position={userLocation}>
      <Popup>User Location: {userLocation[0]}, {userLocation[1]}</Popup>
    </Marker>
  ) : null;*/
  return null;
};

const MapClickHandler = ({ onMapClick }: any) => {
  const map = useMap();

  useEffect(() => {
    if (map) {
      map.on('click', onMapClick);

      return () => {
        map.off('click', onMapClick);
      };
    }
  }, [map, onMapClick]);

  return null;
};

const MapInput = ({setLatitude, setLongitude, submit}: Props) => {
  const [userLocation, setUserLocation] = useState([51.505, -0.09]);
  const [clickedLocation, setClickedLocation] = useState();

  const handleMapClick = (e: any) => {
    setLatitude(e.latlng.lat);
    setLongitude(e.latlng.lng);
    setClickedLocation(e.latlng);
  };

  useEffect(() => {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          const { latitude, longitude } = position.coords;
          setUserLocation([latitude, longitude]);
        },
        (error) => console.error('Error getting user location:', error)
      );
    } else {
      console.error('Geolocation is not supported by this browser.');
    }
  }, []);

  return (
    <div className="h-full lg:max-h-[512px] max-h-[60%] md:mb-16 md:ml-16 md:mr-16">
        <div className='text-center text-white text-2xl mb-3'>
            Click on the map to choose the location
        </div>
      <MapContainer center={userLocation} zoom={8} scrollWheelZoom={true} className="h-full">
        <TileLayer
          attribution='&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
          url="https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png"
        />
        <Location userLocation={userLocation} />
        {clickedLocation && (
          <Marker position={clickedLocation}>
            <Popup>Clicked Location: {clickedLocation.lat.toFixed(6)}, {clickedLocation.lng.toFixed(6)}</Popup>
          </Marker>
        )}
        <MapClickHandler onMapClick={handleMapClick} />
      </MapContainer>
      <div className='flex justify-center h-fit'>
      <button onClick={submit}  className="text-white bg-blue-700 w-40 h-10 md:mt-5 mt-2  text-2xl rounded-md">Go!</button>
      </div>
    </div>
    
  );
};

export default MapInput;

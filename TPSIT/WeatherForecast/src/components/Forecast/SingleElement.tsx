interface Props {
    label: string;
    value: string;
    border? : boolean
}

import { useMemo } from 'react';

const SingleElement = ({ label, value, border }: Props) => {
  const containerClass = useMemo(() => {
    return `text-3xl flex flex-col items-start ml-2 mr-2 p-5 m-1 3xl:m-0 3xl:border-none ${border ? " border-white border rounded-md" : ""}`;
  }, [border]);

  return (
    <div className={containerClass}>
      <div className="text-center w-full">{label}</div>
      <div className="text-center w-full flex-1 flex items-center justify-center text-5xl">{value}</div>
    </div>
  );
};


export default SingleElement;
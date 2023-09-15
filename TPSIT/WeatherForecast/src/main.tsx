import React from 'react'
import ReactDOM from 'react-dom/client'
import App from './App.tsx'
import './index.css'
/*
ReactDOM.createRoot(document.getElementById('root')!).render(
  <React.StrictMode>
    <App />
  </React.StrictMode>,
)*/
import { createRoot } from 'react-dom/client'
import { Routes } from '@generouted/react-router'

const app = document.getElementById("root") as HTMLElement
createRoot(app).render(<Routes/>)
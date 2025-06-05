import Example from './components/Example';
import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';  // Asegúrate de cargar Bootstrap
import React from 'react';
import { createRoot } from 'react-dom/client';
import Example from './components/Example';

// Renderizar en un elemento con ID "react-root"
if (document.getElementById('react-root')) {
  const root = createRoot(document.getElementById('react-root'));
  root.render(<Example />);
}
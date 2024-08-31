import { createRoot } from 'react-dom/client';
import React, { useState } from 'react';

import './bootstrap';


import VotingList from './components/voting/VotingList';


const VotingContainer = document.getElementById('voting-list');


if (VotingContainer) {
    const root = createRoot(VotingContainer); 
    root.render(<VotingList />);
} else {
    console.error('Root element not found');
}
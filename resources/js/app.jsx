import { createRoot } from 'react-dom/client';
import React, { useState } from 'react';

import './bootstrap';


import VotingList from './components/voting/VotingList';
import VotingList2 from './components/voting/VotingList2';


const VotingContainer = document.getElementById('voting-list');
const VotingContainer2 = document.getElementById('voting-list2');
const VotingContainer3 = document.getElementById('voting-list3');


if (VotingContainer) {
    const root = createRoot(VotingContainer); 
    root.render(<VotingList />);
}

if (VotingContainer2) {
    const root = createRoot(VotingContainer2); 
    root.render(<VotingList2 />);
}

if (VotingContainer3) {
    const root = createRoot(VotingContainer3); 
    root.render(<VotingList />);
}
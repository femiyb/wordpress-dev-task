// blocks/PersonModal.js

import React from 'react';

const PersonModal = ({ personData, onClose }) => {
    return (
        <div className="person-modal">
            <h2>{personData.firstName} {personData.lastName}</h2>
            <p>{personData.shortDescription}</p>
            {/* Add social links here */}
            <button onClick={onClose}>Close</button>
        </div>
    );
};

export default PersonModal;

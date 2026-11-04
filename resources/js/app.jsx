import './bootstrap';
import React from 'react';
import { createRoot } from 'react-dom/client';

// import BemAnnouncementBar from './components/BemAnnouncementBar';
import HeroStatsCounter from './components/HeroStatsCounter';
import DynamicBidangShowcase from './components/DynamicBidangShowcase';
import QuickAgendaFeed from './components/QuickAgendaFeed';
import InteractiveProdiDepartemen from './components/InteractiveProdiDepartemen';
import QuickAspirasiWidget from './components/QuickAspirasiWidget';

// Auto-mount React components to matching element IDs in Blade templates

// const announcementContainer = document.getElementById('react-announcement-bar');
// if (announcementContainer) {
//     createRoot(announcementContainer).render(<BemAnnouncementBar />);
// }

const heroStatsContainer = document.getElementById('react-hero-stats');
if (heroStatsContainer) {
    createRoot(heroStatsContainer).render(<HeroStatsCounter />);
}

const prodiContainer = document.getElementById('react-prodi-departemen');
if (prodiContainer) {
    createRoot(prodiContainer).render(<InteractiveProdiDepartemen />);
}

const bidangContainer = document.getElementById('react-bidang-showcase');
if (bidangContainer) {
    createRoot(bidangContainer).render(<DynamicBidangShowcase />);
}

const agendaContainer = document.getElementById('react-agenda-feed');
if (agendaContainer) {
    createRoot(agendaContainer).render(<QuickAgendaFeed />);
}

const aspirasiContainer = document.getElementById('react-aspirasi-widget');
if (aspirasiContainer) {
    createRoot(aspirasiContainer).render(<QuickAspirasiWidget />);
}

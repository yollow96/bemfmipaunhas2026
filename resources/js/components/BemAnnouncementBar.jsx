import React, { useState, useEffect } from 'react';

export default function BemAnnouncementBar() {
    const [isVisible, setIsVisible] = useState(true);

    const announcements = [
        { tag: 'INFO RESMI', text: 'Selamat Datang di Portal Terpadu BEM FMIPA Universitas Hasanuddin.' },
        { tag: 'AGENDA', text: 'Pendaftaran Delegasi MIPA Scientific Competition (MSC) telah dibuka.' },
        { tag: 'ADVOKASI', text: 'Posko Pengawalan Banding UKT & Finansial telah aktif di Sekretariat BEM.' }
    ];

    const [currentIndex, setCurrentIndex] = useState(0);

    useEffect(() => {
        const timer = setInterval(() => {
            setCurrentIndex((prev) => (prev + 1) % announcements.length);
        }, 5000);
        return () => clearInterval(timer);
    }, [announcements.length]);

    if (!isVisible) return null;

    return (
        <div style={{
            backgroundColor: '#09090b',
            borderBottom: '1px solid #27272a',
            padding: '6px 16px',
            fontSize: '12px',
            display: 'flex',
            alignItems: 'center',
            justifyContent: 'space-between',
            position: 'relative',
            zIndex: 1001,
            color: '#fafafa'
        }}>
            <div style={{
                display: 'flex',
                alignItems: 'center',
                gap: '12px',
                flex: 1,
                overflow: 'hidden',
                maxWidth: '1280px',
                margin: '0 auto'
            }}>
                <span style={{
                    backgroundColor: '#FFE500',
                    color: '#000000',
                    padding: '1px 6px',
                    borderRadius: '2px',
                    fontSize: '10px',
                    fontWeight: '700',
                    letterSpacing: '0.04em',
                    flexShrink: 0
                }}>
                    {announcements[currentIndex].tag}
                </span>

                <div style={{
                    whiteSpace: 'nowrap',
                    overflow: 'hidden',
                    textOverflow: 'ellipsis',
                    color: '#a1a1aa',
                    fontSize: '12px',
                    fontWeight: '500'
                }}>
                    {announcements[currentIndex].text}
                </div>
            </div>

            <div style={{ display: 'flex', alignItems: 'center', gap: '4px', flexShrink: 0 }}>
                <button
                    onClick={() => setCurrentIndex((prev) => (prev - 1 + announcements.length) % announcements.length)}
                    style={{
                        background: 'transparent',
                        border: 'none',
                        color: '#71717a',
                        cursor: 'pointer',
                        padding: '2px 4px',
                        fontSize: '13px'
                    }}
                    title="Sebelumnya"
                >
                    ‹
                </button>
                <button
                    onClick={() => setCurrentIndex((prev) => (prev + 1) % announcements.length)}
                    style={{
                        background: 'transparent',
                        border: 'none',
                        color: '#71717a',
                        cursor: 'pointer',
                        padding: '2px 4px',
                        fontSize: '13px'
                    }}
                    title="Berikutnya"
                >
                    ›
                </button>
                <button
                    onClick={() => setIsVisible(false)}
                    style={{
                        background: 'transparent',
                        border: 'none',
                        color: '#71717a',
                        cursor: 'pointer',
                        padding: '2px 4px',
                        fontSize: '14px',
                        marginLeft: '4px'
                    }}
                    title="Tutup pengumuman"
                >
                    ×
                </button>
            </div>
        </div>
    );
}

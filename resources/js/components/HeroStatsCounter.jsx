import React, { useState, useEffect } from 'react';

export default function HeroStatsCounter() {
    const stats = [
        { label: 'Departemen Sains', value: 6, suffix: '', desc: 'Matematika, Fisika, Kimia, Biologi, Geofisika, Statistika' },
        { label: 'Program Studi', value: 10, suffix: '+', desc: 'Jenjang S1 & Pascasarjana Terakreditasi' },
        { label: 'Mahasiswa Aktif', value: 3500, suffix: '+', desc: 'Keluarga Mahasiswa FMIPA Unhas' },
        { label: 'Bidang & Biro Kerja', value: 8, suffix: '', desc: 'Pelayanan aspirasi & kaderisasi terpadu' }
    ];

    const [counts, setCounts] = useState(stats.map(() => 0));

    useEffect(() => {
        // Accessibility: Check user preference for reduced motion (F-10)
        const prefersReducedMotion = typeof window !== 'undefined' &&
            window.matchMedia &&
            window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        if (prefersReducedMotion) {
            setCounts(stats.map(s => s.value));
            return;
        }

        const duration = 1000; // Fast, snappy 1s duration
        const steps = 20;
        const intervalTime = duration / steps;
        let step = 0;

        const timer = setInterval(() => {
            step++;
            const progress = Math.min(step / steps, 1);
            const easeOut = 1 - Math.pow(1 - progress, 2);
            setCounts(stats.map(s => Math.round(s.value * easeOut)));

            if (step >= steps) {
                clearInterval(timer);
            }
        }, intervalTime);

        return () => clearInterval(timer);
    }, []);

    return (
        <div style={{
            position: 'relative',
            zIndex: 10,
            marginTop: '-32px',
            marginBottom: '36px'
        }}>
            <div className="container">
                <div style={{
                    backgroundColor: '#111115',
                    border: '1px solid #27272a',
                    borderRadius: '4px',
                    padding: '20px 24px'
                }}>
                    <div className="row g-3">
                        {stats.map((stat, idx) => (
                            <div key={idx} className="col-6 col-lg-3">
                                <div style={{
                                    borderRight: idx !== stats.length - 1 ? '1px solid #1f1f23' : 'none',
                                    paddingRight: '12px'
                                }}>
                                    <div style={{
                                        display: 'flex',
                                        alignItems: 'baseline',
                                        gap: '4px'
                                    }}>
                                        <span style={{
                                            fontSize: '28px',
                                            fontWeight: '800',
                                            color: '#fafafa',
                                            fontFamily: 'var(--font-sans)',
                                            lineHeight: 1.1,
                                            letterSpacing: '-0.02em'
                                        }}>
                                            {counts[idx].toLocaleString('id-ID')}{stat.suffix}
                                        </span>
                                        <span style={{
                                            width: '6px',
                                            height: '6px',
                                            backgroundColor: '#FFE500',
                                            display: 'inline-block',
                                            borderRadius: '1px'
                                        }}></span>
                                    </div>
                                    <div style={{
                                        fontSize: '13px',
                                        fontWeight: '600',
                                        color: '#a1a1aa',
                                        marginTop: '4px'
                                    }}>
                                        {stat.label}
                                    </div>
                                    <div style={{
                                        fontSize: '11.5px',
                                        color: '#a1a1aa',
                                        marginTop: '2px',
                                        lineHeight: 1.3
                                    }}>
                                        {stat.desc}
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </div>
        </div>
    );
}

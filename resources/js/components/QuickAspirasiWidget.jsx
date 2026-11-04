import React, { useState, useEffect } from 'react';

export default function QuickAspirasiWidget() {
    const [isOpen, setIsOpen] = useState(false);
    const [nama, setNama] = useState('');
    const [nim, setNim] = useState('');
    const [prodi, setProdi] = useState('Matematika');
    const [kategori, setKategori] = useState('Akademik & Perkuliahan');
    const [pesan, setPesan] = useState('');
    const [isAnonim, setIsAnonim] = useState(false);
    const [isSubmitted, setIsSubmitted] = useState(false);

    const categories = [
        'Akademik & Perkuliahan',
        'Fasilitas & Laboratorium',
        'Advokasi UKT & Finansial',
        'Kegiatan & Ormawa',
        'Kritik & Saran BEM'
    ];

    // Keyboard accessibility: Close dialog on Escape key (F-05)
    useEffect(() => {
        const handleKeyDown = (e) => {
            if (e.key === 'Escape' && isOpen) {
                setIsOpen(false);
            }
        };
        if (isOpen) {
            window.addEventListener('keydown', handleKeyDown);
        }
        return () => {
            window.removeEventListener('keydown', handleKeyDown);
        };
    }, [isOpen]);

    const handleSubmit = (e) => {
        e.preventDefault();
        if (!pesan.trim()) return;

        setIsSubmitted(true);
        setTimeout(() => {
            setIsSubmitted(false);
            setIsOpen(false);
            setPesan('');
            setNama('');
            setNim('');
        }, 2000);
    };

    return (
        <>
            {/* Functional Floating Trigger - Positioned at bottom-left to prevent collision with scroll-to-top button (F-06) */}
            <div style={{
                position: 'fixed',
                bottom: '24px',
                left: '24px',
                zIndex: 9990
            }}>
                <button
                    onClick={() => setIsOpen(true)}
                    aria-label="Buka formulir Layanan Aspirasi Mahasiswa FMIPA Unhas"
                    style={{
                        backgroundColor: '#09090b',
                        color: '#FFE500',
                        border: '1px solid #FFE500',
                        borderRadius: '4px',
                        padding: '10px 16px',
                        fontWeight: '700',
                        fontSize: '13px',
                        display: 'flex',
                        alignItems: 'center',
                        gap: '8px',
                        cursor: 'pointer',
                        boxShadow: '0 4px 12px rgba(0, 0, 0, 0.6)',
                        transition: 'background-color 140ms ease-out, color 140ms ease-out'
                    }}
                    onMouseEnter={(e) => {
                        e.currentTarget.style.backgroundColor = '#FFE500';
                        e.currentTarget.style.color = '#000000';
                    }}
                    onMouseLeave={(e) => {
                        e.currentTarget.style.backgroundColor = '#09090b';
                        e.currentTarget.style.color = '#FFE500';
                    }}
                >
                    <span>Layanan Aspirasi</span>
                </button>
            </div>

            {/* Modal Dialog (Utilitarian 1px Border, No Blur) */}
            {isOpen && (
                <div
                    role="dialog"
                    aria-modal="true"
                    aria-labelledby="aspirasi-modal-title"
                    style={{
                        position: 'fixed',
                        inset: 0,
                        backgroundColor: 'rgba(0, 0, 0, 0.75)',
                        zIndex: 9999,
                        display: 'flex',
                        alignItems: 'center',
                        justifyContent: 'center',
                        padding: '16px'
                    }}
                >
                    <div style={{
                        backgroundColor: '#111115',
                        border: '1px solid #27272a',
                        borderRadius: '4px',
                        width: '100%',
                        maxWidth: '480px',
                        boxShadow: '0 8px 24px rgba(0, 0, 0, 0.8)',
                        overflow: 'hidden'
                    }}>
                        {/* Header */}
                        <div style={{
                            padding: '14px 18px',
                            borderBottom: '1px solid #27272a',
                            display: 'flex',
                            alignItems: 'center',
                            justifyContent: 'space-between',
                            backgroundColor: '#09090b'
                        }}>
                            <div>
                                <h3 id="aspirasi-modal-title" style={{
                                    fontSize: '15px',
                                    fontWeight: '700',
                                    color: '#fafafa',
                                    margin: 0
                                }}>
                                    Formulir Aspirasi Mahasiswa
                                </h3>
                                <p style={{
                                    fontSize: '12px',
                                    color: '#a1a1aa',
                                    margin: '2px 0 0'
                                }}>
                                    Kanal advokasi resmi BEM FMIPA Universitas Hasanuddin
                                </p>
                            </div>
                            <button
                                onClick={() => setIsOpen(false)}
                                aria-label="Tutup dialog aspirasi"
                                style={{
                                    background: 'transparent',
                                    border: 'none',
                                    color: '#a1a1aa',
                                    fontSize: '18px',
                                    cursor: 'pointer',
                                    padding: '4px 8px'
                                }}
                            >
                                ✕
                            </button>
                        </div>

                        {/* Content */}
                        <div style={{ padding: '18px' }}>
                            {isSubmitted ? (
                                <div style={{
                                    padding: '24px 16px',
                                    textAlign: 'center'
                                }}>
                                    <div style={{
                                        color: '#FFE500',
                                        fontSize: '14px',
                                        fontWeight: '700',
                                        marginBottom: '6px'
                                    }}>
                                        Aspirasi Berhasil Terkirim
                                    </div>
                                    <p style={{ fontSize: '13px', color: '#a1a1aa', margin: 0 }}>
                                        Terima kasih. Masukan Anda akan diproses oleh Biro Advokasi & Kebijakan Kampus.
                                    </p>
                                </div>
                            ) : (
                                <form onSubmit={handleSubmit}>
                                    <div style={{ marginBottom: '12px' }}>
                                        <label htmlFor="aspirasi-kategori" style={{ fontSize: '12px', fontWeight: '600', color: '#a1a1aa', display: 'block', marginBottom: '4px' }}>
                                            Kategori Aspirasi
                                        </label>
                                        <select
                                            id="aspirasi-kategori"
                                            name="kategori"
                                            value={kategori}
                                            onChange={(e) => setKategori(e.target.value)}
                                            style={{
                                                width: '100%',
                                                backgroundColor: '#09090b',
                                                border: '1px solid #27272a',
                                                color: '#fafafa',
                                                padding: '7px 10px',
                                                borderRadius: '4px',
                                                fontSize: '13px',
                                                outline: 'none'
                                            }}
                                        >
                                            {categories.map((c, idx) => (
                                                <option key={idx} value={c}>{c}</option>
                                            ))}
                                        </select>
                                    </div>

                                    {!isAnonim && (
                                        <div style={{ display: 'grid', gridTemplateColumns: '1fr 1fr', gap: '10px', marginBottom: '12px' }}>
                                            <div>
                                                <label htmlFor="aspirasi-nama" style={{ fontSize: '12px', fontWeight: '600', color: '#a1a1aa', display: 'block', marginBottom: '4px' }}>
                                                    Nama Lengkap
                                                </label>
                                                <input
                                                    id="aspirasi-nama"
                                                    name="nama"
                                                    type="text"
                                                    value={nama}
                                                    onChange={(e) => setNama(e.target.value)}
                                                    placeholder="Nama Anda"
                                                    style={{
                                                        width: '100%',
                                                        backgroundColor: '#09090b',
                                                        border: '1px solid #27272a',
                                                        color: '#fafafa',
                                                        padding: '7px 10px',
                                                        borderRadius: '4px',
                                                        fontSize: '13px',
                                                        outline: 'none'
                                                    }}
                                                />
                                            </div>
                                            <div>
                                                <label htmlFor="aspirasi-nim" style={{ fontSize: '12px', fontWeight: '600', color: '#a1a1aa', display: 'block', marginBottom: '4px' }}>
                                                    NIM (Opsional)
                                                </label>
                                                <input
                                                    id="aspirasi-nim"
                                                    name="nim"
                                                    type="text"
                                                    value={nim}
                                                    onChange={(e) => setNim(e.target.value)}
                                                    placeholder="H0......"
                                                    style={{
                                                        width: '100%',
                                                        backgroundColor: '#09090b',
                                                        border: '1px solid #27272a',
                                                        color: '#fafafa',
                                                        padding: '7px 10px',
                                                        borderRadius: '4px',
                                                        fontSize: '13px',
                                                        outline: 'none'
                                                    }}
                                                />
                                            </div>
                                        </div>
                                    )}

                                    <div style={{ marginBottom: '12px' }}>
                                        <label htmlFor="aspirasi-pesan" style={{ fontSize: '12px', fontWeight: '600', color: '#a1a1aa', display: 'block', marginBottom: '4px' }}>
                                            Isi Aspirasi / Keluhan
                                        </label>
                                        <textarea
                                            id="aspirasi-pesan"
                                            name="pesan"
                                            rows={4}
                                            required
                                            value={pesan}
                                            onChange={(e) => setPesan(e.target.value)}
                                            placeholder="Tuliskan detail aspirasi, kendala akademik, fasilitas, atau saran perbaikan..."
                                            style={{
                                                width: '100%',
                                                backgroundColor: '#09090b',
                                                border: '1px solid #27272a',
                                                color: '#fafafa',
                                                padding: '8px 10px',
                                                borderRadius: '4px',
                                                fontSize: '13px',
                                                outline: 'none',
                                                resize: 'vertical'
                                            }}
                                        ></textarea>
                                    </div>

                                    <div style={{
                                        display: 'flex',
                                        alignItems: 'center',
                                        justifyContent: 'space-between',
                                        marginTop: '16px',
                                        borderTop: '1px solid #1f1f23',
                                        paddingTop: '14px'
                                    }}>
                                        <label htmlFor="aspirasi-anonim" style={{ display: 'flex', alignItems: 'center', gap: '6px', fontSize: '12px', color: '#a1a1aa', cursor: 'pointer' }}>
                                            <input
                                                id="aspirasi-anonim"
                                                name="isAnonim"
                                                type="checkbox"
                                                checked={isAnonim}
                                                onChange={(e) => setIsAnonim(e.target.checked)}
                                            />
                                            Kirim sebagai Anonim
                                        </label>

                                        <div style={{ display: 'flex', gap: '8px' }}>
                                            <button
                                                type="button"
                                                onClick={() => setIsOpen(false)}
                                                style={{
                                                    backgroundColor: 'transparent',
                                                    color: '#a1a1aa',
                                                    border: '1px solid #27272a',
                                                    borderRadius: '4px',
                                                    padding: '6px 14px',
                                                    fontSize: '12.5px',
                                                    fontWeight: '600',
                                                    cursor: 'pointer'
                                                }}
                                            >
                                                Batal
                                            </button>
                                            <button
                                                type="submit"
                                                style={{
                                                    backgroundColor: '#FFE500',
                                                    color: '#000000',
                                                    border: '1px solid #FFE500',
                                                    borderRadius: '4px',
                                                    padding: '6px 16px',
                                                    fontSize: '12.5px',
                                                    fontWeight: '700',
                                                    cursor: 'pointer'
                                                }}
                                            >
                                                Kirim Sekarang
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            )}
                        </div>
                    </div>
                </div>
            )}
        </>
    );
}

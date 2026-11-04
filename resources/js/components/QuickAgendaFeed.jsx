import React, { useState } from 'react';

export default function QuickAgendaFeed() {
    const agendas = [
        {
            id: 1,
            judul: 'PROGRESIP 2026',
            kategori: 'Pengaderan',
            tanggal: 'Triwulan I 2026',
            lokasi: 'FMIPA Unhas / Wilayah Makassar & Gowa',
            status: 'Segera Hadir',
            deskripsi: 'Proses pengaderan dan sosialisasi ikhwal perjuangan untuk menanamkan pemahaman kelembagaan bagi mahasiswa FMIPA Unhas.'
        },
        {
            id: 2,
            judul: 'Agora MIPA',
            kategori: 'Kastrat & Advokasi',
            tanggal: 'Triwulan II 2026',
            lokasi: 'Pelataran & Aula FMIPA Unhas',
            status: 'Persiapan',
            deskripsi: 'Wadah dialektika terbuka, kajian isu strategis kemahasiswaan, dan advokasi fasilitas akademik kampus.'
        },
        {
            id: 3,
            judul: 'MIPA Mengabdi',
            kategori: 'Humas & Pengabdian',
            tanggal: 'Triwulan II 2026',
            lokasi: 'Masyarakat Binaan / Daerah Sasaran',
            status: 'Perencanaan',
            deskripsi: 'Program dedikasi sosial kemasyarakatan sebagai manifestasi Tri Dharma Perguruan Tinggi oleh mahasiswa FMIPA Unhas.'
        },
        {
            id: 4,
            judul: 'SIGMA & SINTESIS 2026',
            kategori: 'Kerohanian Islam',
            tanggal: 'Triwulan II 2026',
            lokasi: 'Musholla FMIPA / Daring',
            status: 'Terjadwal',
            deskripsi: 'Studi Islam Generasi Muslim MIPA dan sinergi sains keislaman dalam memperkokoh moral dan ukhuwah civitas akademika.'
        }
    ];

    const [selectedTab, setSelectedTab] = useState('Semua');
    const tabs = ['Semua', 'Pengaderan', 'Kastrat & Advokasi', 'Humas & Pengabdian', 'Kerohanian Islam'];

    const filteredAgendas = selectedTab === 'Semua'
        ? agendas
        : agendas.filter(a => a.kategori === selectedTab);

    return (
        <section style={{
            backgroundColor: '#09090b',
            padding: '48px 0',
            borderTop: '1px solid #1f1f23',
            borderBottom: '1px solid #1f1f23'
        }}>
            <div className="container">
                <div style={{
                    display: 'flex',
                    flexWrap: 'wrap',
                    justifyContent: 'space-between',
                    alignItems: 'flex-end',
                    marginBottom: '24px',
                    gap: '16px',
                    borderBottom: '1px solid #1f1f23',
                    paddingBottom: '16px'
                }}>
                    <div>
                        <span style={{
                            fontSize: '11px',
                            fontWeight: '700',
                            color: '#FFE500',
                            letterSpacing: '0.08em',
                            textTransform: 'uppercase'
                        }}>
                            Agenda & Kalender Kegiatan
                        </span>
                        <h3 style={{
                            fontSize: '1.5rem',
                            fontWeight: '800',
                            color: '#fafafa',
                            margin: '4px 0 0',
                            letterSpacing: '-0.02em'
                        }}>
                            Jadwal Agenda Terdekat
                        </h3>
                    </div>

                    {/* Filter Tabs */}
                    <div style={{ display: 'flex', flexWrap: 'wrap', gap: '6px' }}>
                        {tabs.map((tab, idx) => {
                            const isSelected = selectedTab === tab;
                            return (
                                <button
                                    key={idx}
                                    onClick={() => setSelectedTab(tab)}
                                    style={{
                                        backgroundColor: isSelected ? '#18181c' : 'transparent',
                                        color: isSelected ? '#FFE500' : '#a1a1aa',
                                        border: `1px solid ${isSelected ? '#FFE500' : '#27272a'}`,
                                        borderRadius: '4px',
                                        padding: '5px 12px',
                                        fontSize: '12px',
                                        fontWeight: isSelected ? '700' : '500',
                                        cursor: 'pointer',
                                        transition: 'border-color 140ms ease-out, color 140ms ease-out'
                                    }}
                                >
                                    {tab}
                                </button>
                            );
                        })}
                    </div>
                </div>

                {/* Structured Utilitarian List */}
                <div style={{ display: 'flex', flexDirection: 'column', gap: '8px' }}>
                    {filteredAgendas.length === 0 ? (
                        <div style={{
                            padding: '28px 16px',
                            textAlign: 'center',
                            backgroundColor: '#111115',
                            border: '1px solid #27272a',
                            borderRadius: '4px',
                            color: '#a1a1aa',
                            fontSize: '13px'
                        }}>
                            Tidak ada jadwal kegiatan untuk kategori ini saat ini.
                        </div>
                    ) : (
                        filteredAgendas.map((item) => (
                            <div
                                key={item.id}
                                className="fmipa-agenda-row"
                            >
                                {/* Date Column */}
                                <div>
                                    <div style={{
                                        fontSize: '12.5px',
                                        fontWeight: '700',
                                        color: '#fafafa',
                                        lineHeight: 1.2
                                    }}>
                                        {item.tanggal}
                                    </div>
                                    <div style={{
                                        fontSize: '11px',
                                        color: '#a1a1aa',
                                        marginTop: '3px'
                                    }}>
                                        {item.lokasi}
                                    </div>
                                </div>

                                {/* Title & Description */}
                                <div>
                                    <div style={{ display: 'flex', alignItems: 'center', gap: '8px', marginBottom: '4px' }}>
                                        <span style={{
                                            fontSize: '10px',
                                            fontWeight: '700',
                                            textTransform: 'uppercase',
                                            letterSpacing: '0.04em',
                                            color: '#d4d4d8',
                                            backgroundColor: '#18181c',
                                            padding: '2px 6px',
                                            borderRadius: '2px',
                                            border: '1px solid #27272a'
                                        }}>
                                            {item.kategori}
                                        </span>
                                        <h4 style={{
                                            fontSize: '14.5px',
                                            fontWeight: '700',
                                            color: '#fafafa',
                                            margin: 0
                                        }}>
                                            {item.judul}
                                        </h4>
                                    </div>
                                    <p style={{
                                        fontSize: '12px',
                                        color: '#a1a1aa',
                                        margin: 0,
                                        lineHeight: 1.45
                                    }}>
                                        {item.deskripsi}
                                    </p>
                                </div>

                                {/* Status Tag */}
                                <div style={{ textAlign: 'right' }}>
                                    <span style={{
                                        fontSize: '11px',
                                        fontWeight: '600',
                                        color: item.status === 'Pendaftaran Dibuka' ? '#FFE500' : '#d4d4d8',
                                        backgroundColor: item.status === 'Pendaftaran Dibuka' ? '#1c1a00' : '#18181c',
                                        border: `1px solid ${item.status === 'Pendaftaran Dibuka' ? 'rgba(255, 229, 0, 0.35)' : '#27272a'}`,
                                        padding: '4px 10px',
                                        borderRadius: '2px',
                                        whiteSpace: 'nowrap'
                                    }}>
                                        {item.status}
                                    </span>
                                </div>
                            </div>
                        ))
                    )}
                </div>
            </div>
        </section>
    );
}

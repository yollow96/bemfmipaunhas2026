import React, { useState, useMemo } from 'react';

export default function DynamicBidangShowcase() {
    const categories = ['Semua', 'Pimpinan & Legislatif', 'Kaderisasi & Karakter', 'Advokasi & Akademik', 'Humas & Kesekretariatan'];

    const bidangList = [
        {
            id: 'inti',
            nama: 'Struktur Inti BEM',
            kategori: 'Pimpinan & Legislatif',
            tagline: 'Ketua Umum, Sekretaris Umum & Bendahara Umum',
            deskripsi: 'Ketua Umum (Adrian Tri Saputra), Sekretaris Umum, dan Bendahara Umum mengarahkan kebijakan strategis, legalitas formal, serta tata kelola organisasi.',
            proker: ['Rapat Kerja Tahunan', 'Grand Briefing Pengurus', 'Monitoring & Evaluasi Bulanan'],
            link: '/about/inti'
        },
        {
            id: 'dewan',
            nama: 'Dewan Perwakilan Anggota (DPA)',
            kategori: 'Pimpinan & Legislatif',
            tagline: 'Legislasi, Pengawasan & Yudikatif',
            deskripsi: 'Lembaga legislatif kemahasiswaan yang bertugas mengawasi kinerja eksekutif BEM, menyusun produk hukum, dan mengawal musyawarah mahasiswa.',
            proker: ['Sidang Pleno Mahasiswa', 'Legislative Hearing', 'Sosialisasi Produk Hukum'],
            link: '/about/dewan'
        },
        {
            id: 'pengaderan',
            nama: 'Bidang Pengaderan',
            kategori: 'Kaderisasi & Karakter',
            tagline: 'Kaderisasi Berjenjang & Nilai Perjuangan',
            deskripsi: 'Merumuskan dan mengawal proses pengaderan anggota BEM FMIPA Unhas yang berkarakter tangguh, kritis, dan berintegritas.',
            proker: ['PROGRESIP 2026', 'Program Pengembangan Kader (PPK)', 'Kader Siang & Kader Malam'],
            link: '/about/pengaderan'
        },
        {
            id: 'advokasi',
            nama: 'Bidang Kajian Strategis & Advokasi',
            kategori: 'Advokasi & Akademik',
            tagline: 'Kajian Isu Strategis & Dialektika Terbuka',
            deskripsi: 'Garda terdepan pengawalan isu strategis kebijakan kampus dan kemahasiswaan, advokasi fasilitas akademik, serta ruang dialektika via Agora MIPA.',
            proker: ['Agora MIPA', 'Kajian Kebijakan Kampus', 'Advokasi Fasilitas Mahasiswa'],
            link: '/about/advokasi'
        },
        {
            id: 'humas',
            nama: 'Bidang Hubungan Masyarakat',
            kategori: 'Humas & Kesekretariatan',
            tagline: 'Kemitraan Publik & Pengabdian Masyarakat',
            deskripsi: 'Jembatan relasi eksternal, diseminasi informasi publik, aksi kelestarian lingkungan, serta pengabdian masyarakat nyata berbasis sains.',
            proker: ['MIPA Mengabdi', 'Kemitraan Publik & Publikasi', 'Edukasi Kelestarian Lingkungan'],
            link: '/about/humas'
        },
        {
            id: 'akademik',
            nama: 'Bidang Akademik & Kemahasiswaan',
            kategori: 'Advokasi & Akademik',
            tagline: 'Pelayanan Akademik & Pelepasan Wisudawan',
            deskripsi: 'Mengawal pelayanan urusan akademik, pendampingan hak-hak mahasiswa, serta penghargaan status keanggotaan via Pelepasan Wisudawan.',
            proker: ['Pelepasan Wisudawan', 'Pengawalan Hak Mahasiswa', 'Layanan Informasi Akademik'],
            link: '/about/akademik'
        },
        {
            id: 'kesekretariatan',
            nama: 'Bidang Kesekretariatan',
            kategori: 'Humas & Kesekretariatan',
            tagline: 'Harmonisasi & Tata Kelola Sekretariat',
            deskripsi: 'Mewujudkan lingkungan organisasi yang nyaman, indah, dan rapi melalui Harmonia serta optimalisasi tata kelola administrasi dan persuratan.',
            proker: ['Harmonia', 'Tata Kelola Persuratan', 'Inventarisasi & Rumah BEM'],
            link: '/about/kesek'
        },
        {
            id: 'rohis',
            nama: 'Bidang Kerohanian Islam',
            kategori: 'Kaderisasi & Karakter',
            tagline: 'Studi Islam, Sinergi Sains & Syiar Dakwah',
            deskripsi: 'Pembinaan spiritualitas moral, sinergi wawasan sains dan nilai Islam, serta publikasi syiar dakwah kreatif di civitas akademika.',
            proker: ['SIGMA', 'SINTESIS', 'Pamflet Syiar Islam'],
            link: '/about/rohis'
        }
    ];

    const [selectedCategory, setSelectedCategory] = useState('Semua');
    const [searchQuery, setSearchQuery] = useState('');

    const filteredBidang = useMemo(() => {
        return bidangList.filter(item => {
            const matchesCategory = selectedCategory === 'Semua' || item.kategori === selectedCategory;
            const q = searchQuery.toLowerCase().trim();
            const matchesSearch = !q ||
                item.nama.toLowerCase().includes(q) ||
                item.tagline.toLowerCase().includes(q) ||
                item.deskripsi.toLowerCase().includes(q) ||
                item.proker.some(p => p.toLowerCase().includes(q));
            return matchesCategory && matchesSearch;
        });
    }, [selectedCategory, searchQuery]);

    return (
        <section id="bidang-showcase" style={{
            backgroundColor: '#09090b',
            padding: '56px 0',
            borderTop: '1px solid #1f1f23'
        }}>
            <div className="container">
                {/* Header */}
                <div style={{ marginBottom: '28px' }}>
                    <div style={{
                        display: 'flex',
                        flexWrap: 'wrap',
                        justifyContent: 'space-between',
                        alignItems: 'flex-end',
                        gap: '16px',
                        borderBottom: '1px solid #1f1f23',
                        paddingBottom: '20px'
                    }}>
                        <div>
                            <span style={{
                                fontSize: '11px',
                                fontWeight: '700',
                                color: '#FFE500',
                                letterSpacing: '0.08em',
                                textTransform: 'uppercase'
                            }}>
                                Struktur Organisasi
                            </span>
                            <h2 style={{
                                fontSize: '1.75rem',
                                fontWeight: '800',
                                color: '#fafafa',
                                margin: '4px 0 0',
                                letterSpacing: '-0.02em'
                            }}>
                                Bidang Kerja <span style={{ color: '#FFE500' }}>BEM FMIPA Unhas</span>
                            </h2>
                        </div>
                        <p style={{
                            color: '#a1a1aa',
                            fontSize: '13.5px',
                            maxWidth: '520px',
                            margin: 0,
                            lineHeight: 1.5
                        }}>
                            Sinergi kepengurusan BEM FMIPA Unhas Periode 2026 yang terdiri dari Pimpinan Inti, Dewan Perwakilan Anggota, serta 6 Bidang Kerja strategis.
                        </p>
                    </div>
                </div>

                {/* Filter Controls (Utilitarian Toolbar) */}
                <div style={{
                    display: 'flex',
                    flexWrap: 'wrap',
                    alignItems: 'center',
                    justifyContent: 'space-between',
                    gap: '12px',
                    marginBottom: '24px'
                }}>
                    {/* Category Filter Tabs */}
                    <div style={{
                        display: 'flex',
                        flexWrap: 'wrap',
                        gap: '6px'
                    }}>
                        {categories.map((cat, idx) => {
                            const isSelected = selectedCategory === cat;
                            return (
                                <button
                                    key={idx}
                                    onClick={() => setSelectedCategory(cat)}
                                    style={{
                                        backgroundColor: isSelected ? '#18181c' : 'transparent',
                                        color: isSelected ? '#FFE500' : '#a1a1aa',
                                        border: `1px solid ${isSelected ? '#FFE500' : '#27272a'}`,
                                        borderRadius: '4px',
                                        padding: '6px 12px',
                                        fontSize: '12.5px',
                                        fontWeight: isSelected ? '700' : '500',
                                        cursor: 'pointer',
                                        transition: 'border-color 140ms ease-out, color 140ms ease-out'
                                    }}
                                >
                                    {cat}
                                </button>
                            );
                        })}
                    </div>

                    {/* Search Input */}
                    <div style={{ minWidth: '220px', flex: '0 1 260px' }}>
                        <input
                            type="text"
                            placeholder="Cari bidang atau program kerja..."
                            aria-label="Cari bidang kerja atau program prioritas"
                            value={searchQuery}
                            onChange={(e) => setSearchQuery(e.target.value)}
                            style={{
                                width: '100%',
                                backgroundColor: '#111115',
                                border: '1px solid #27272a',
                                color: '#fafafa',
                                padding: '6px 12px',
                                borderRadius: '4px',
                                fontSize: '12.5px',
                                outline: 'none'
                            }}
                            onFocus={(e) => e.target.style.borderColor = '#FFE500'}
                            onBlur={(e) => e.target.style.borderColor = '#27272a'}
                        />
                    </div>
                </div>

                {/* Grid Cards (Strict 1px border, high information density, no nested card bloat) */}
                <div className="row g-3">
                    {filteredBidang.map((bidang) => (
                        <div key={bidang.id} className="col-md-6 col-lg-3">
                            <div style={{
                                backgroundColor: '#111115',
                                border: '1px solid #27272a',
                                borderRadius: '4px',
                                padding: '18px',
                                height: '100%',
                                display: 'flex',
                                flexDirection: 'column',
                                justifyContent: 'space-between',
                                transition: 'border-color 140ms ease-out'
                            }}
                            onMouseEnter={(e) => e.currentTarget.style.borderColor = '#3f3f46'}
                            onMouseLeave={(e) => e.currentTarget.style.borderColor = '#27272a'}
                            >
                                <div>
                                    <div style={{
                                        display: 'flex',
                                        justifyContent: 'space-between',
                                        alignItems: 'center',
                                        marginBottom: '10px'
                                    }}>
                                        <span style={{
                                            fontSize: '10.5px',
                                            fontWeight: '700',
                                            textTransform: 'uppercase',
                                            letterSpacing: '0.04em',
                                            color: '#a1a1aa',
                                            backgroundColor: '#18181c',
                                            padding: '2px 6px',
                                            borderRadius: '2px',
                                            border: '1px solid #27272a'
                                        }}>
                                            {bidang.kategori}
                                        </span>
                                    </div>

                                    <h4 style={{
                                        fontSize: '15px',
                                        fontWeight: '700',
                                        color: '#fafafa',
                                        margin: '0 0 6px',
                                        lineHeight: 1.3
                                    }}>
                                        {bidang.nama}
                                    </h4>

                                    <p style={{
                                        color: '#a1a1aa',
                                        fontSize: '12.5px',
                                        lineHeight: 1.5,
                                        margin: '0 0 14px'
                                    }}>
                                        {bidang.deskripsi}
                                    </p>

                                    {/* Direct Proker Pills (Visible upfront without dropdowns) */}
                                    <div style={{
                                        borderTop: '1px solid #1f1f23',
                                        paddingTop: '10px',
                                        marginBottom: '14px'
                                    }}>
                                        <div style={{
                                            fontSize: '11px',
                                            fontWeight: '600',
                                            color: '#a1a1aa',
                                            marginBottom: '6px',
                                            textTransform: 'uppercase',
                                            letterSpacing: '0.04em'
                                        }}>
                                            Program Prioritas:
                                        </div>
                                        <div style={{ display: 'flex', flexDirection: 'column', gap: '4px' }}>
                                            {bidang.proker.map((pr, pIdx) => (
                                                <div key={pIdx} style={{
                                                    fontSize: '11.5px',
                                                    color: '#d4d4d8',
                                                    display: 'flex',
                                                    alignItems: 'center',
                                                    gap: '6px'
                                                }}>
                                                    <span style={{
                                                        width: '4px',
                                                        height: '4px',
                                                        backgroundColor: '#FFE500',
                                                        borderRadius: '1px'
                                                    }}></span>
                                                    <span>{pr}</span>
                                                </div>
                                            ))}
                                        </div>
                                    </div>
                                </div>

                                <a
                                    href={bidang.link}
                                    style={{
                                        display: 'inline-flex',
                                        alignItems: 'center',
                                        justifyContent: 'center',
                                        padding: '7px 12px',
                                        backgroundColor: '#18181c',
                                        border: '1px solid #27272a',
                                        borderRadius: '4px',
                                        color: '#fafafa',
                                        fontSize: '12px',
                                        fontWeight: '600',
                                        textDecoration: 'none',
                                        transition: 'background-color 140ms ease-out, border-color 140ms ease-out, color 140ms ease-out'
                                    }}
                                    onMouseEnter={(e) => {
                                        e.currentTarget.style.backgroundColor = '#FFE500';
                                        e.currentTarget.style.borderColor = '#FFE500';
                                        e.currentTarget.style.color = '#000000';
                                    }}
                                    onMouseLeave={(e) => {
                                        e.currentTarget.style.backgroundColor = '#18181c';
                                        e.currentTarget.style.borderColor = '#27272a';
                                        e.currentTarget.style.color = '#fafafa';
                                    }}
                                >
                                    <span>Detail Struktur & Pengurus</span>
                                </a>
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </section>
    );
}

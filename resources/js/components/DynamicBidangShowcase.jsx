import React, { useState, useMemo } from 'react';

export default function DynamicBidangShowcase() {
    const categories = ['Semua', 'Pimpinan & Dewan', 'Internal & Kader', 'Akademik & Bakat', 'Relasi & Kesekretariatan'];

    const bidangList = [
        {
            id: 'inti',
            nama: 'Struktur Inti BEM',
            kategori: 'Pimpinan & Dewan',
            tagline: 'Kepemimpinan & Tata Kelola Organisasi',
            deskripsi: 'Ketua Umum, Sekretaris Umum, dan Bendahara Umum mengarahkan kebijakan strategis, legalitas formal, serta koordinasi seluruh elemen.',
            proker: ['Rapat Kerja Tahunan', 'Grand Briefing Pengurus', 'Monitoring & Evaluasi Bulanan'],
            link: '/about/inti'
        },
        {
            id: 'dewan',
            nama: 'Dewan Mahasiswa FMIPA',
            kategori: 'Pimpinan & Dewan',
            tagline: 'Legislasi, Pengawasan & Yudikatif',
            deskripsi: 'Lembaga legislatif kemahasiswaan yang bertugas mengawasi kinerja eksekutif, menyusun produk hukum, dan mengawal musyawarah mahasiswa.',
            proker: ['Sidang Pleno Mahasiswa', 'Legislative Hearing', 'Sosialisasi Produk Hukum'],
            link: '/about/dewan'
        },
        {
            id: 'pengaderan',
            nama: 'Bidang Pengaderan',
            kategori: 'Internal & Kader',
            tagline: 'Kurikulum Kaderisasi & Karakter',
            deskripsi: 'Merumuskan dan mengawal kurikulum kaderisasi bertahap untuk mencetak generasi mahasiswa sains yang kritis, berintegritas, dan solutif.',
            proker: ['Latihan Kepemimpinan Mahasiswa (LKM)', 'Pendampingan Mahasiswa Baru', 'Sekolah Pemikiran Kritis'],
            link: '/about/pengaderan'
        },
        {
            id: 'rohis',
            nama: 'Bidang Kerohanian Islam',
            kategori: 'Internal & Kader',
            tagline: 'Pembinaan Spiritual & Moral',
            deskripsi: 'Wadah pembinaan nilai spiritualitas, moralitas intelektual, dan toleransi civitas akademika FMIPA Unhas.',
            proker: ['Kajian Rutin Sains & Islam', 'Ramadhan di FMIPA', 'Bina Karakter Insani'],
            link: '/about/rohis'
        },
        {
            id: 'akademik',
            nama: 'Bidang Akademik & Riset',
            kategori: 'Akademik & Bakat',
            tagline: 'Pengembangan Sains & Advokasi UKT',
            deskripsi: 'Mengawal isu akademik perkuliahan, klinik advokasi bantuan UKT/beasiswa, workshop PKM, dan delegasi kompetisi sains.',
            proker: ['Klinik Advokasi UKT Terpadu', 'MIPA Scientific Training', 'Workshop PKM & Jurnal'],
            link: '/about/akademik'
        },
        {
            id: 'miba',
            nama: 'Bidang Minat & Bakat',
            kategori: 'Akademik & Bakat',
            tagline: 'Apresiasi Prestasi Olahraga & Seni',
            deskripsi: 'Memfasilitasi potensi non-akademik mahasiswa dalam turnamen keolahragaan, kompetisi esports, dan kreativitas seni budaya.',
            proker: ['MIPA Olympiad & Sports', 'Kompetisi E-Sports FMIPA', 'Pentas Kreasi Seni Mahasiswa'],
            link: '/about/miba'
        },
        {
            id: 'eksternal',
            nama: 'Bidang Hubungan Eksternal',
            kategori: 'Relasi & Kesekretariatan',
            tagline: 'Jejaring Kampus & Pengabdian Sosial',
            deskripsi: 'Membangun sinergi kemitraan antar-BEM kampus, program Bina Desa, serta respons advokasi sosial kemasyarakatan.',
            proker: ['MIPA Mengabdi ke Desa', 'Studi Banding Antar-BEM', 'Forum Komunikasi Alumni'],
            link: '/about/eksternal'
        },
        {
            id: 'kesekretariatan',
            nama: 'Biro Kesekretariatan',
            kategori: 'Relasi & Kesekretariatan',
            tagline: 'Arsip, Inventaris & Rumah BEM',
            deskripsi: 'Digitalisasi administrasi persuratan, inventaris fasilitas kelembagaan, dan pemeliharaan kenyamanan gedung sekretariat BEM.',
            proker: ['Digitalisasi Persuratan Terpadu', 'SOP Inventaris & Peminjaman', 'Pemeliharaan Gedung Sekretariat'],
            link: '/about/kesek'
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
                                Bidang & Biro <span style={{ color: '#FFE500' }}>BEM FMIPA Unhas</span>
                            </h2>
                        </div>
                        <p style={{
                            color: '#a1a1aa',
                            fontSize: '13.5px',
                            maxWidth: '520px',
                            margin: 0,
                            lineHeight: 1.5
                        }}>
                            8 entitas kerja eksekutif & legislatif yang menjalankan fungsi pelayanan advokasi, pengembangan nalar sains, dan kaderisasi mahasiswa.
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

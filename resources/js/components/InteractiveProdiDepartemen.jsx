import React, { useState } from 'react';

export default function InteractiveProdiDepartemen() {
    const departments = [
        { id: 'semua', nama: 'Semua Bidang Sains' },
        { id: 'matematika', nama: 'Departemen Matematika' },
        { id: 'fisika', nama: 'Departemen Fisika' },
        { id: 'kimia', nama: 'Departemen Kimia' },
        { id: 'biologi', nama: 'Departemen Biologi' },
        { id: 'geofisika', nama: 'Departemen Geofisika' }
    ];

    const prodiList = [
        {
            deptId: 'matematika',
            nama: 'S1 Matematika',
            akreditasi: 'Unggul / ASIIN',
            fokus: 'Aljabar terapan, analisis fungsional, optimasi matematika, dan pemodelan sistem stokastik.',
            web: 'https://math.sci.unhas.ac.id/'
        },
        {
            deptId: 'matematika',
            nama: 'S1 Sistem Informasi',
            akreditasi: 'Unggul',
            fokus: 'Rekayasa perangkat lunak, sistem cerdas, cloud computing, dan arsitektur enterprise.',
            web: 'https://is.sci.unhas.ac.id/'
        },
        {
            deptId: 'matematika',
            nama: 'S1 Ilmu Aktuaria',
            akreditasi: 'Baik Sekali',
            fokus: 'Matematika asuransi, mitigasi risiko finansial, portofolio investasi, dan dana pensiun.',
            web: 'https://sci.unhas.ac.id/'
        },
        {
            deptId: 'matematika',
            nama: 'S1 Statistika',
            akreditasi: 'Unggul',
            fokus: 'Sains data, komputasi statistik, biostatistika, survei sampel, dan machine learning.',
            web: 'https://himastat.sci.unhas.ac.id/'
        },
        {
            deptId: 'fisika',
            nama: 'S1 Fisika',
            akreditasi: 'Unggul',
            fokus: 'Fisika material & semikonduktor, optik fotonika, instrumentasi cerdas, dan fisika medis.',
            web: 'https://fisika.sci.unhas.ac.id/'
        },
        {
            deptId: 'geofisika',
            nama: 'S1 Geofisika',
            akreditasi: 'Unggul',
            fokus: 'Eksplorasi seismik, geomagnetik, geolistrik, mitigasi bencana geologi, dan reservoir geotermal.',
            web: 'https://geofisika.sci.unhas.ac.id/'
        },
        {
            deptId: 'kimia',
            nama: 'S1 Kimia',
            akreditasi: 'Unggul / ASIIN',
            fokus: 'Kimia organik bahan alam, sintesis nanomaterial, kimia analitik instrumen, dan biokimia terapan.',
            web: 'https://kimia.sci.unhas.ac.id/'
        },
        {
            deptId: 'biologi',
            nama: 'S1 Biologi',
            akreditasi: 'Unggul',
            fokus: 'Konservasi biodiversitas Wallacea, mikrobiologi terapan, bioteknologi molekuler, dan ekologi kelautan.',
            web: 'https://biologi.sci.unhas.ac.id/'
        }
    ];

    const [selectedDept, setSelectedDept] = useState('semua');

    const filteredProdi = selectedDept === 'semua'
        ? prodiList
        : prodiList.filter(p => p.deptId === selectedDept);

    return (
        <section style={{ backgroundColor: '#09090b', padding: '48px 0', borderTop: '1px solid #1f1f23' }}>
            <div className="container">
                <div style={{ marginBottom: '24px' }}>
                    <h3 style={{ fontSize: '1.5rem', fontWeight: '800', color: '#fafafa', margin: 0 }}>
                        Program Studi & Keilmuan FMIPA
                    </h3>
                    <p style={{ color: '#a1a1aa', fontSize: '13px', margin: '4px 0 0' }}>
                        Pilihan disiplin ilmu sains terakreditasi di bawah naungan Fakultas MIPA Universitas Hasanuddin.
                    </p>
                </div>

                <div style={{ display: 'flex', flexWrap: 'wrap', gap: '6px', marginBottom: '20px' }}>
                    {departments.map((dept) => (
                        <button
                            key={dept.id}
                            onClick={() => setSelectedDept(dept.id)}
                            style={{
                                backgroundColor: selectedDept === dept.id ? '#18181c' : 'transparent',
                                color: selectedDept === dept.id ? '#FFE500' : '#a1a1aa',
                                border: `1px solid ${selectedDept === dept.id ? '#FFE500' : '#27272a'}`,
                                borderRadius: '4px',
                                padding: '6px 12px',
                                fontSize: '12px',
                                fontWeight: '600',
                                cursor: 'pointer'
                            }}
                        >
                            {dept.nama}
                        </button>
                    ))}
                </div>

                <div className="row g-3">
                    {filteredProdi.map((prodi, idx) => (
                        <div key={idx} className="col-md-6 col-lg-3">
                            <div style={{
                                backgroundColor: '#111115',
                                border: '1px solid #27272a',
                                borderRadius: '4px',
                                padding: '16px',
                                height: '100%',
                                display: 'flex',
                                flexDirection: 'column',
                                justifyContent: 'space-between'
                            }}>
                                <div>
                                    <div style={{ display: 'flex', justifyContent: 'space-between', alignItems: 'center', marginBottom: '8px' }}>
                                        <h4 style={{ fontSize: '14px', fontWeight: '700', color: '#fafafa', margin: 0 }}>
                                            {prodi.nama}
                                        </h4>
                                        <span style={{
                                            fontSize: '10px',
                                            fontWeight: '700',
                                            color: '#FFE500',
                                            backgroundColor: '#1c1a00',
                                            border: '1px solid rgba(255, 229, 0, 0.3)',
                                            padding: '1px 5px',
                                            borderRadius: '2px'
                                        }}>
                                            {prodi.akreditasi}
                                        </span>
                                    </div>
                                    <p style={{ fontSize: '12px', color: '#a1a1aa', lineHeight: 1.4, margin: '0 0 12px' }}>
                                        {prodi.fokus}
                                    </p>
                                </div>
                                <a
                                    href={prodi.web}
                                    target="_blank"
                                    rel="noreferrer"
                                    style={{
                                        fontSize: '11.5px',
                                        fontWeight: '600',
                                        color: '#fafafa',
                                        textDecoration: 'none'
                                    }}
                                >
                                    Portal Departemen →
                                </a>
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </section>
    );
}

<?php

return [
    'title'       => 'เมนู',
    'description' => 'เลือกเมนูที่สามารถเข้าถึงได้',

    'not_found' => 'ไม่มีเมนูที่ใช้ได้',
    'form'      => [
        'title'             => 'ชื่อ',
        'title_description' => 'เกี่ยวกับเรา',
        'alt'               => 'เลือกชื่อ',
        'alt_description'   => 'ประวัติความเป็นมาของ บริษัท',
        'url'               => 'URL',
        'url_description'   => '/ เกี่ยวกับ',
        'display'           => [
            'name'      => 'แสดงผล',
            'variables' => [
                'no_auth' => 'สาธารณะ',
                'auth'    => 'เฉพาะผู้ใช้ที่ได้รับอนุญาตเท่านั้น',
            ],
        ],
        'class'             => 'คลาส',
        'relations'         => [
            'name'      => 'ความสัมพันธ์',
            'variables' => [
                'answer'     => 'ตอบคำถาม',
                'chapter'    => 'มาตราหรือบทของเอกสารปัจจุบัน',
                'co-worker'  => "เชื่อมโยงไปยังหน้าของเพื่อนร่วมงาน",
                'colleague'  => "เชื่อมโยงไปยังหน้าของเพื่อนร่วมงาน (ไม่ใช่ที่ทำงาน)",
                'contact'    => 'ลิงก์ไปยังหน้าเว็บที่มีข้อมูลการติดต่อ',
                'details'    => 'เชื่อมโยงไปยังหน้าเว็บที่มีรายละเอียด',
                'edit'       => 'รุ่นที่แก้ไขได้ของเอกสารปัจจุบัน',
                'friend'     => 'ลิงก์ไปยังหน้าเพื่อน',
                'question'   => 'คำถาม',
                'archives'   => 'เชื่อมโยงไปยังเว็บไซต์ที่เก็บ',
                'author'     => 'เชื่อมโยงไปยังหน้าเกี่ยวกับผู้เขียนในโดเมนเดียวกัน',
                'bookmark'   => 'ลิงก์ถาวรไปยังส่วนหรือรายการ',
                'first'      => 'เชื่อมโยงไปยังหน้าแรก',
                'help'       => 'เชื่อมโยงไปยังเอกสารด้วยความช่วยเหลือ',
                'index'      => 'ลิงก์ไปยังเนื้อหา',
                'last'       => 'เชื่อมโยงไปยังหน้าสุดท้าย',
                'license'    => 'ลิงก์ไปยังหน้าเว็บที่มีข้อตกลงใบอนุญาตหรือลิขสิทธิ์',
                'me'         => 'เชื่อมโยงไปยังหน้าผู้เขียนในโดเมนอื่น',
                'next'       => 'เชื่อมโยงไปยังหน้าหรือส่วนถัดไป',
                'nofollow'   => 'ไม่ผ่านลิงก์ TIC และ PR',
                'noreferrer' => 'การเชื่อมโยงไม่ผ่านส่วนหัว HTTP ',
                'prefetch'   => 'บ่งบอกว่าคุณต้องแคชทรัพยากรที่ระบุล่วงหน้า',
                'prev'       => 'เชื่อมโยงไปยังหน้าหรือส่วนก่อนหน้า',
                'search'     => 'ลิงก์เพื่อค้นหา',
                'sidebar'    => 'เพิ่มลิงก์ไปยังรายการโปรดของเบราเซอร์',
                'tag'        => 'แสดงให้เห็นว่าแท็ก (แท็ก) มีความเกี่ยวข้องกับเอกสารปัจจุบัน',
                'up'         => 'เชื่อมโยงไปยังหน้าหลัก',
            ],
        ],
        'target'            => [
            'name'      => 'การเชื่อมโยงเป้าหมาย',
            'variables' => [
                'self'  => 'ในหน้าต่างปัจจุบัน',
                'blank' => 'ในหน้าต่างใหม่',
            ],
        ],
        'control'           => [
            'remove' => 'เอาออก',
            'reset'  => 'รีเซ็ต',
            'create' => 'สร้าง',
            'save'   => 'บันทึก',
        ],
    ],
];

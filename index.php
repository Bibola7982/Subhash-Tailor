<?php
// ==========================================
// BUSINESS CONFIGURATION (Dukaan ki Details)
// ==========================================
$shop_title     = "SUBHASH TAILOR";
$shop_full_name = "सुभाष टेलर (Subhash Tailor)";
$tagline        = "सिलाई, फिटिंग व रफू का पक्का काम";
$phone          = "9034493898";
$wa_phone       = "919034493898";
$location       = "गांव व डाकखाना: सैनीपुरा (Sanipura), तहसील हांसी, जिला हिसार (हरियाणा)";
$landmark       = "सरकारी स्कूल व शहीद फौजी की मूर्ति के बिल्कुल पास";
$map_link       = "https://maps.google.com/?q=Sainipura+Hansi+Haryana";
$current_year   = date('Y');

// Services Data (Aap yahan se rate ya details asani se badal sakte hain)
$services = [
    [
        "tag"   => "Gents Wear",
        "title" => "पैंट व कमीज की सिलाई",
        "desc"  => "स्कूल यूनिफॉर्म, ड्यूटी या रोजाना पहनने के लिए आरामदायक और मजबूत सिलाई।",
        "points"=> ["कड़क या नरम कॉलर (जैसी पसंद हो)", "मोबाइल की गहरी जेब व मजबूत बेल्ट लूप", "कम्फर्ट या स्लिम फिटिंग"],
        "rate"  => "वाजिब रेट",
        "img"   => "https://images.unsplash.com/photo-1602810318383-e386cc2a3ccf?auto=format&fit=crop&w=600&q=80",
        "wa_msg"=> "Ram Ram ji, mujhe nayi Pant-Shirt silwani hai."
    ],
    [
        "tag"   => "Desi Culture",
        "title" => "कुर्ता पजामा व पठानी",
        "desc"  => "सूती (कॉटन) का खुला-डुला कुर्ता पजामा या त्योहार-शादी के लिए कॉलर वाला पठानी सूट।",
        "points"=> ["गोल गला या शर्ट वाला कॉलर", "चौड़ा पजामा या सलवार कट", "दोनों तरफ मजबूत जेब"],
        "rate"  => "सही दाम",
        "img"   => "https://images.unsplash.com/photo-1610030469983-98e550d6193c?auto=format&fit=crop&w=600&q=80",
        "wa_msg"=> "Ram Ram ji, mujhe Kurta Pajama silwana hai."
    ],
    [
        "tag"   => "Ladies Wear",
        "title" => "लेडीज सूट व सलवार",
        "desc"  => "घर में पहनने वाले सादे कॉटन सूट, सलवार-कमीज या फंक्शन के लिए फिनिशिंग कटिंग।",
        "points"=> ["सलवार, पटियाला या पैंट स्टाइल", "गले की साफ फिनिशिंग व अस्तर सेटिंग", "बॉडी नाप के अनुसार सही फिटिंग"],
        "rate"  => "किफायती रेट",
        "img"   => "https://images.unsplash.com/photo-1617627143750-d86bc21e42bb?auto=format&fit=crop&w=600&q=80",
        "wa_msg"=> "Ram Ram ji, Ladies Suit silai ke bare me puchhna hai."
    ],
    [
        "tag"   => "अल्टर / फिटिंग",
        "title" => "कपड़े बड़े से छोटे करना (फिटिंग)",
        "desc"  => "बाजार या ऑनलाइन मंगवाए कपड़े लंबे या ढीले आ गए हों, तो बिना कटिंग बिगाड़े सही नाप बनाएं।",
        "points"=> ["पैंट की लंबाई (Length) कम करना", "कमर ढीली या टाइट करना", "शर्ट या लेडीज सूट की बाजुएं व छाती फिट करना"],
        "rate"  => "कम खर्च",
        "img"   => "https://images.unsplash.com/photo-1598961942613-ba897716405b?auto=format&fit=crop&w=600&q=80",
        "wa_msg"=> "Ram Ram ji, kapde chote karwane hain (fitting)."
    ],
    [
        "tag"   => "रफू व मरम्मत",
        "title" => "रफू व चैन (Zip) बदलना",
        "desc"  => "अच्छी पैंट, शर्ट या सूट कहीं से फट गया हो या सिलाई खुल गई हो तो उसे नया जैसा दुरुस्त करवाएं।",
        "points"=> ["मैचिंग धागे से बारीक रफू", "जींस व पैंट की टूटी चैन बदलना", "बटन लगाना, हुक लगाना, खुली सिलाई पक्की करना"],
        "rate"  => "सस्ते में ठीक",
        "img"   => "https://images.unsplash.com/photo-1528458876861-544fd1761a91?auto=format&fit=crop&w=600&q=80",
        "wa_msg"=> "Ram Ram ji, pant/shirt me ruffu aur chain badalwani hai."
    ]
];
?>
<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $shop_title; ?> | Sainipura, Hansi - Tailoring & Repair</title>
  <meta name="description" content="<?= $shop_title; ?> Sainipura (Hansi) - Pant-Shirt, Kurta Pajama, Ladies Suit silai, kapde chote karna aur ruffu ka pakka kaam." />
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Teko:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --primary: #0f172a;
      --accent-orange: #ea580c;
      --whatsapp: #25d366;
      --call: #1d4ed8;
      --bg: #f8fafc;
      --card-bg: #ffffff;
      --text-dark: #1e293b;
      --text-muted: #64748b;
      --radius: 12px;
      --shadow: 0 4px 14px rgba(0,0,0,0.06);
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: var(--bg);
      color: var(--text-dark);
      line-height: 1.5;
      padding-bottom: 85px;
    }
    a { text-decoration: none; color: inherit; }

    header {
      background: var(--primary);
      color: #fff;
      padding: 12px 16px;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0,0,0,0.15);
    }
    .header-box {
      max-width: 900px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .shop-logo-text h1 {
      font-family: 'Teko', sans-serif;
      font-size: 1.9rem;
      letter-spacing: 0.5px;
      line-height: 1;
      color: #fff;
    }
    .shop-logo-text span {
      font-size: 0.75rem;
      color: #cbd5e1;
      display: block;
    }
    .btn-call-head {
      background: var(--call);
      color: #fff;
      padding: 7px 14px;
      border-radius: 6px;
      font-size: 0.82rem;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }

    .hero {
      background: linear-gradient(rgba(15, 23, 42, 0.88), rgba(15, 23, 42, 0.94)),
                  url('https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=900&q=80') center/cover;
      color: #fff;
      padding: 34px 16px 38px;
      text-align: center;
    }
    .hero-badge {
      display: inline-block;
      background: var(--accent-orange);
      color: #fff;
      font-size: 0.78rem;
      font-weight: 700;
      padding: 4px 12px;
      border-radius: 20px;
      margin-bottom: 10px;
      text-transform: uppercase;
    }
    .hero h2 {
      font-family: 'Teko', sans-serif;
      font-size: 2.2rem;
      line-height: 1.15;
      margin-bottom: 10px;
      letter-spacing: 0.5px;
    }
    .hero p {
      font-size: 0.92rem;
      color: #e2e8f0;
      max-width: 550px;
      margin: 0 auto 20px;
    }
    .hero-btns {
      display: flex;
      justify-content: center;
      gap: 10px;
      flex-wrap: wrap;
    }
    .btn-wa-hero {
      background: var(--whatsapp);
      color: #fff;
      padding: 12px 18px;
      border-radius: 8px;
      font-weight: 700;
      font-size: 0.92rem;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .btn-call-hero {
      background: #fff;
      color: var(--primary);
      padding: 12px 18px;
      border-radius: 8px;
      font-weight: 700;
      font-size: 0.92rem;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .container {
      max-width: 900px;
      margin: 0 auto;
      padding: 0 16px;
    }

    .discount-card {
      background: #fffbeb;
      border: 2px dashed #d97706;
      border-radius: var(--radius);
      padding: 14px 16px;
      margin: 18px 0;
      text-align: center;
    }
    .discount-card h3 {
      font-size: 1.05rem;
      color: #b45309;
      font-weight: 700;
      margin-bottom: 3px;
    }
    .discount-card p {
      font-size: 0.85rem;
      color: #451a03;
    }

    .title-block {
      text-align: center;
      margin: 28px 0 16px;
    }
    .title-block h3 {
      font-family: 'Teko', sans-serif;
      font-size: 1.9rem;
      color: var(--primary);
      line-height: 1;
    }
    .title-block p {
      font-size: 0.85rem;
      color: var(--text-muted);
    }

    .services-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 16px;
    }
    .card {
      background: var(--card-bg);
      border-radius: var(--radius);
      overflow: hidden;
      border: 1px solid #e2e8f0;
      box-shadow: var(--shadow);
      display: flex;
      flex-direction: column;
    }
    .card-img-wrapper {
      position: relative;
      height: 175px;
      background: #cbd5e1;
    }
    .card-img-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .card-tag {
      position: absolute;
      top: 8px;
      left: 8px;
      background: rgba(15, 23, 42, 0.85);
      color: #fff;
      font-size: 0.72rem;
      font-weight: 600;
      padding: 3px 8px;
      border-radius: 4px;
    }
    .card-content {
      padding: 15px;
      display: flex;
      flex-direction: column;
      flex: 1;
      justify-content: space-between;
    }
    .card-content h4 {
      font-size: 1.15rem;
      color: var(--primary);
      margin-bottom: 6px;
    }
    .card-content p {
      font-size: 0.86rem;
      color: #475569;
      margin-bottom: 12px;
    }
    .card-list {
      list-style: none;
      font-size: 0.82rem;
      color: #334155;
      margin-bottom: 14px;
    }
    .card-list li {
      margin-bottom: 4px;
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .card-footer {
      border-top: 1px solid #f1f5f9;
      padding-top: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .rate-text {
      font-weight: 700;
      font-size: 0.92rem;
      color: var(--accent-orange);
    }
    .rate-text span {
      display: block;
      font-size: 0.7rem;
      color: var(--text-muted);
      font-weight: 400;
    }
    .btn-card-order {
      background: #f1f5f9;
      border: 1px solid #cbd5e1;
      color: var(--primary);
      font-size: 0.8rem;
      font-weight: 600;
      padding: 6px 12px;
      border-radius: 6px;
    }
    .btn-card-order:hover {
      background: var(--whatsapp);
      color: #fff;
      border-color: var(--whatsapp);
    }

    .trust-row {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 10px;
      margin: 22px 0;
    }
    .trust-pill {
      background: #fff;
      border: 1px solid #e2e8f0;
      padding: 10px;
      border-radius: 8px;
      text-align: center;
      font-size: 0.82rem;
      font-weight: 600;
      color: #334155;
    }
    .trust-pill span {
      display: block;
      font-size: 1.3rem;
      margin-bottom: 2px;
    }

    .address-card {
      background: var(--card-bg);
      border-radius: var(--radius);
      border: 1px solid #e2e8f0;
      padding: 18px;
      margin: 24px 0;
      box-shadow: var(--shadow);
    }
    .address-card h4 {
      font-size: 1.1rem;
      color: var(--primary);
      margin-bottom: 8px;
    }
    .landmark-chip {
      display: inline-block;
      background: #fef08a;
      color: #854d0e;
      font-weight: 700;
      font-size: 0.82rem;
      padding: 4px 10px;
      border-radius: 5px;
      margin-top: 6px;
    }

    .mobile-sticky {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background: #ffffff;
      padding: 10px 14px;
      box-shadow: 0 -3px 15px rgba(0,0,0,0.1);
      display: flex;
      gap: 10px;
      z-index: 999;
    }
    .mobile-sticky a {
      flex: 1;
      text-align: center;
      padding: 12px;
      border-radius: 8px;
      font-weight: 700;
      font-size: 0.9rem;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
    }
    .sticky-btn-call { background: var(--call); color: #fff; }
    .sticky-btn-wa { background: var(--whatsapp); color: #fff; }

    footer {
      text-align: center;
      padding: 20px 16px 10px;
      font-size: 0.78rem;
      color: var(--text-muted);
      border-top: 1px solid #e2e8f0;
      background: #f1f5f9;
    }

    @media (min-width: 600px) {
      .trust-row { grid-template-columns: repeat(4, 1fr); }
    }
  </style>
</head>
<body>

  <header>
    <div class="header-box">
      <div class="shop-logo-text">
        <h1><?= $shop_title; ?></h1>
        <span>📍 VPO Sainipura, Hansi (Hisar)</span>
      </div>
      <a href="tel:<?= $phone; ?>" class="btn-call-head">
        📞 <?= $phone; ?>
      </a>
    </div>
  </header>

  <section class="hero">
    <div class="hero-badge">राम-राम भाईयों • देसी अंदाज, पक्की सिलाई</div>
    <h2><?= $tagline; ?></h2>
    <p>पैंट-कमीज, कुर्ता-पजामा, लेडीज सूट की नई सिलाई या बाजार से लाए ढीले/बड़े कपड़ों को ठीक करवाना — सब कुछ वाजिब रेट पर!</p>
    
    <div class="hero-btns">
      <a href="https://wa.me/<?= $wa_phone; ?>?text=Ram%20Ram%20Subhash%20ji,%20mujhe%20kapde%20ke%20kaam%20ke%20liye%20puchhna%20hai." class="btn-wa-hero" target="_blank">
        💬 WhatsApp पर बात करें
      </a>
      <a href="tel:<?= $phone; ?>" class="btn-call-hero">
        📞 सीधे फोन मिलाएं
      </a>
    </div>
  </section>

  <main class="container">

    <div class="discount-card">
      <h3>🏷️ खास छूट ऑफर (Family & Combo Discount)</h3>
      <p>एक साथ 2 पैंट-शर्ट या परिवार के लेडीज सूट/कपड़ों की फिटिंग करवाने पर <strong>स्पेशल डिस्काउंट</strong> मिलेगा! दुकान पर वेबसाइट का नाम बताएं।</p>
    </div>

    <div class="trust-row">
      <div class="trust-pill">
        <span>✂️</span>
        नाप के हिसाब से फिटिंग
      </div>
      <div class="trust-pill">
        <span>🧵</span>
        मजबूत धागा व सिलाई
      </div>
      <div class="trust-pill">
        <span>⏱️</span>
        पक्के समय पर डिलीवरी
      </div>
      <div class="trust-pill">
        <span>💰</span>
        गांव-देहात का सही रेट
      </div>
    </div>

    <div class="title-block">
      <h3>हमारी सेवाएं (Services)</h3>
      <p>हरियाणा के रहन-सहन और जरूरतों के अनुसार रोजमर्रा का काम</p>
    </div>

    <div class="services-list">
      <?php foreach ($services as $service): ?>
        <div class="card">
          <div class="card-img-wrapper">
            <span class="card-tag"><?= htmlspecialchars($service['tag']); ?></span>
            <img src="<?= htmlspecialchars($service['img']); ?>" alt="<?= htmlspecialchars($service['title']); ?>" loading="lazy" />
          </div>
          <div class="card-content">
            <div>
              <h4><?= htmlspecialchars($service['title']); ?></h4>
              <p><?= htmlspecialchars($service['desc']); ?></p>
              <ul class="card-list">
                <?php foreach ($service['points'] as $point): ?>
                  <li>✔️ <?= htmlspecialchars($point); ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
            <div class="card-footer">
              <div class="rate-text">
                <?= htmlspecialchars($service['rate']); ?>
                <span>संतुष्टि की गारंटी</span>
              </div>
              <a href="https://wa.me/<?= $wa_phone; ?>?text=<?= urlencode($service['wa_msg']); ?>" class="btn-card-order" target="_blank">ऑर्डर करें</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="address-card">
      <h4>📍 दुकान का पता (Shop Location)</h4>
      <p><strong><?= $shop_full_name; ?></strong><br><?= $location; ?></p>
      <div class="landmark-chip">📌 पहचान: <?= $landmark; ?></div>
      <p style="margin-top: 10px; font-size: 0.85rem; color: #64748b;">
        आने से पहले फोन (<strong><?= $phone; ?></strong>) पर बात कर लें ताकि आपको दुकान पर इंतजार न करना पड़े।
      </p>
      <div style="margin-top: 14px;">
        <a href="<?= $map_link; ?>" target="_blank" style="display:inline-block; background: var(--primary); color:#fff; padding: 9px 16px; border-radius: 6px; font-size: 0.84rem; font-weight: 600;">
          🗺️ गूगल मैप पर रास्ता देखें
        </a>
      </div>
    </div>

  </main>

  <div class="mobile-sticky">
    <a href="tel:<?= $phone; ?>" class="sticky-btn-call">
      <span>📞</span> फोन मिलाएं
    </a>
    <a href="https://wa.me/<?= $wa_phone; ?>?text=Ram%20Ram%20Subhash%20ji,%20mujhe%20kapde%20ke%20kaam%20ke%20liye%20puchhna%20hai." class="sticky-btn-wa" target="_blank">
      <span>💬</span> व्हाट्सएप चैट
    </a>
  </div>

  <footer>
    <p><strong><?= $shop_full_name; ?></strong></p>
    <p>सम्पर्क: <?= $phone; ?> | <?= $landmark; ?></p>
    <p style="margin-top: 5px; opacity: 0.75;">© <?= $current_year; ?> Subhash Tailor. All Rights Reserved.</p>
  </footer>

</body>
</html>

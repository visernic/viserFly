<div align="center">
  <a href="https://visernic.com">
    <img src="https://i.imgur.com/NtaVpzy.png" alt="ViserFly Logo" width="100" height="100">
  </a>

  <h1 align="center">ViserFly - 3D Flight Tracker UI</h1>

  <p align="center">
    <strong>An Immersive 3D Flight Tracking Interface with Real-time Telemetry Simulation</strong>
    <br />
    Developed by <a href="https://github.com/visernic"><strong>Visernic Limited</strong></a>
    <br />
    <br />
    <a href="https://visernic.com">🌐 Website</a>
    ·
    <a href="https://github.com/visernic/viserFly/issues">🐞 Report Bug</a>
    ·
    <a href="https://github.com/visernic/viserFly/issues">✨ Request Feature</a>
  </p>

  <p align="center">
    <img src="https://img.shields.io/badge/version-1.0.0-blue.svg?style=for-the-badge" alt="Version">
    <img src="https://img.shields.io/badge/license-MIT-green.svg?style=for-the-badge" alt="License">
    <img src="https://img.shields.io/badge/maintained%20by-Visernic%20Limited-orange?style=for-the-badge" alt="Maintained">
    <img src="https://img.shields.io/badge/php-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  </p>
</div>

<br />

## ✈️ About The Project

**ViserFly** is a state-of-the-art Flight Tracker UI designed to demonstrate the power of modern web technologies. It features a realistic 3D Boeing 787-9 Dreamliner model, real-time telemetry simulation (Speed, Altitude, Pitch), and a stunning Glassmorphism UI.

The project is built with a **Secure MVC Architecture**, separating the core application logic from the public access point, ensuring enterprise-level security standards.

### ✨ Key Features

* **3D Interactive Model:** Fully rendered 3D Aircraft using **Three.js**.
* **Real-time Simulation:** Dynamic updates for Speed, Altitude, and Pitch using **Motion One**.
* **Audio Visualization:** LED-style audio visualizer synced with cockpit audio.
* **Secure Architecture:** Custom MVC structure with protected `app/` directory.
* **Glassmorphism Design:** Modern, translucent UI aesthetics.
* **Responsive:** Fully optimized for Desktop, Tablet, and Mobile devices.

---

## 🛠 Tech Stack

**Frontend:**
* ![Threejs](https://img.shields.io/badge/Three.js-black?style=flat-square&logo=three.js&logoColor=white) **Three.js** (3D Rendering)
* ![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat-square&logo=javascript&logoColor=black) **ES6 Modules**
* ![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat-square&logo=css3&logoColor=white) **Glassmorphism UI**

**Backend:**
* ![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white) **Core PHP (MVC Pattern)**
* ![Apache](https://img.shields.io/badge/Apache-D22128?style=flat-square&logo=apache&logoColor=white) **.htaccess Rewrites**

---

## 🚀 Getting Started

Follow these instructions to set up the project locally.

### Prerequisites

* PHP >= 8.0
* Local Server (XAMPP, WAMP, Laragon, or Apache)
* Composer (Optional)

### Installation

1.  **Clone the repository**
    ```bash
    git clone [https://github.com/visernic/viserFly.git](https://github.com/visernic/viserFly.git)
    ```

2.  **Navigate to the project directory**
    ```bash
    cd ViserFly
    ```

3.  **Configure Server**
    Ensure your server points to the root `ViserFly/` directory. The included `.htaccess` file will automatically handle traffic and direct it securely to the `public/` folder.

4.  **Run (PHP Built-in Server)**
    If you don't use XAMPP/Apache, you can simply run:
    ```bash
    cd ViserFly
    php -S localhost:8000 -t public
    ```
    Then visit `http://localhost:8000`

---

## 📂 Project Structure

We follow a strict **Security-First** folder structure:

```text
ViserFly/
├── .github/             # GitHub Templates
├── app/                 # 🔒 Core Logic (Protected)
│   ├── config/          # Configuration Files
│   ├── includes/        # Header, Footer, Navbar
│   └── views/           # UI Components
├── public/              # 🌍 Public Access Point
│   ├── assets/          # CSS, JS, Images
│   └── index.php        # Entry Point
├── .htaccess            # Traffic Controller
├── LICENSE
└── README.md
```

---

## 🛡 Security Policy

This project uses a defined constant check (`VISERFLY_ACCESS`) to prevent direct access to core application files in the `app/` directory. Please review `SECURITY.md` for our vulnerability reporting policy.

---

## 🤝 Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1.  Fork the Project
2.  Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3.  Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4.  Push to the Branch (`git push origin feature/AmazingFeature`)
5.  Open a Pull Request

---

## 📜 License

Distributed under the MIT License. See `LICENSE` for more information.

---

## 📞 Contact

**Visernic Limited** - [@visernic](https://twitter.com/visernic) - contact@visernic.com

Project Link: [https://github.com/visernic/viserFly](https://github.com/visernic/viserFly)

<br />
<div align="center">
  <p>Made with ❤️ by <a href="https://visernic.com">Visernic Limited</a></p>
</div>

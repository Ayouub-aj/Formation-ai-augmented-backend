# 🐘 PHP Formation

**Powered by Maroc Numeric Cluster & Simplon**

Learn PHP fundamentals through practical, real-world projects.

---

## 📂 What's Inside

6 learning modules covering core PHP concepts with hands-on exercises.

---

## 🛠️ Technos Utilisées

| Technologie | Version | Utilisation |
|-------------|---------|------------|
| **PHP** | 7.4+ | Server-side logic & form processing |
| **HTML5** | - | Frontend markup |
| **CSS3** | - | Styling & UI design |
| **Sessions** | Built-in | Data persistence across requests |
| **Apache/XAMPP** | - | Local development server |

---

## 📚 Modules

### 1️⃣ Arrays & Strings
**`arays and strings/`**
- **DebtTracker.php** → Track friend debts (associative arrays, foreach loops)

### 2️⃣ Form Processing
**`form processing/`**
- **ShoppingCart.php** → Interactive e-commerce cart (sessions, POST requests)
- **cart.php** → Add items to cart with persistence
- **Multi-Step.php** → Multi-step form workflows

### 3️⃣ Functions
**`functions/`**
- **CalculationEngine.php** → Reusable calculation functions
- **LogicGateKeeper.php** → Access control with boolean logic
- **PersonalizedGreeting.php** → Dynamic message generation
- **SafeMultiplier.php** → Input validation & safe operations
- **TextFlipper.php** → String manipulation utilities

### 4️⃣ Loops
**`loops/`**
- **StarPrinter.php** → While loops & iterations
- **LinearCounter.php** → Sequential counting
- **ReverseCounter.php** → Countdown & reverse iteration
- **EvenNumberCounter.php** → Filter numbers using modulo
- **EvenNumberDetector.php** → Detect & highlight patterns
- **GrowingTriangle.php** → Nested loops & ASCII patterns

### 5️⃣ Superglobals
**`superglobals/`**
- **ContactForm.php** → Form validation, XSS prevention, email validation
- **GETandURLmanipulation.php** → URL parameters & query strings

### 6️⃣ Variables & Conditions
**`variables and conditions/`**
- **EventTicket.php** → Age-based pricing with if/elseif
- **CalculateTeaBill.php** → Conditional billing logic
- **EventTicketFlowgorithm.fprg** → Algorithm visualization

---

## 📸 Capture d'écran

| Module | Aperçu |
|--------|--------|
| 🛒 Shopping Cart | Interactive cart interface with add/remove functionality |
| 📝 Contact Form | Form validation with real-time feedback |
| 📊 Debt Tracker | Financial summary with dynamic calculations |
| 🎨 Loops & Patterns | ASCII art generation and visual patterns |
| ✅ Event Pricing | Conditional pricing based on user attributes |

> Screenshots will be added as the project develops.

---

## 📦 Instructions d'Installation

### Prérequis
- **PHP 7.4** ou version supérieure
- **Apache** ou serveur web compatible
- **XAMPP**, **WAMP**, ou **LAMP** (recommandé)
- Un navigateur web moderne

### Étapes d'Installation

**1. Installer XAMPP (ou équivalent)**
```bash
# Télécharger depuis https://www.apachefriends.org/
# Installer et lancer le serveur Apache
```

**2. Cloner/Copier le projet**
```bash
# Windows (XAMPP)
cd C:\xampp\htdocs
git clone https://github.com/votre-repo/Formation-ai-augmented-backend.git

# Ou copier manuellement dans le dossier htdocs
```

**3. Démarrer Apache**
- Ouvrir **XAMPP Control Panel**
- Cliquer sur **Start** pour Apache
- Confirmer que le serveur est en cours d'exécution

**4. Accéder à l'application**
```
http://localhost/Formation-ai-augmented-backend/formation-php/[module]/[fichier].php
```

### Exemple d'Accès

```
#️⃣ Accès Direct aux Modules
Module 1 → http://localhost/Formation-ai-augmented-backend/formation-php/arays%20and%20strings/DebtTracker.php
Module 2 → http://localhost/Formation-ai-augmented-backend/formation-php/form%20processing/ShoppingCart.php
Module 3 → http://localhost/Formation-ai-augmented-backend/formation-php/functions/CalculationEngine.php
Module 4 → http://localhost/Formation-ai-augmented-backend/formation-php/loops/GrowingTriangle.php
Module 5 → http://localhost/Formation-ai-augmented-backend/formation-php/superglobals/ContactForm.php
Module 6 → http://localhost/Formation-ai-augmented-backend/formation-php/variables%20and%20conditions/EventTicket.php
```

### Configuration PHP

Vérifier que PHP est correctement configuré :
```bash
php -v
```

Fichiers de configuration (si nécessaire) :
- `php.ini` → Dans le dossier XAMPP PHP
- Session path → `C:\xampp\tmp\` (Windows)

### Dépannage Courants

| Problème | Solution |
|----------|----------|
| Port 80 occupé | Changer le port dans `httpd.conf` |
| Erreur 404 | Vérifier le chemin d'accès et le nom des fichiers |
| Sessions ne fonctionnent pas | Vérifier les permissions du dossier tmp |
| Affichage PHP brut | S'assurer que Apache est en cours d'exécution |

---

## 🎯 Quick Start

| Step | Action |
|------|--------|
| 1 | Start with **Module 6** (Variables & Conditions) |
| 2 | Learn **Module 4** (Loops) |
| 3 | Master **Module 3** (Functions) |
| 4 | Practice **Module 1** (Arrays) |
| 5 | Deep dive **Module 5** (Superglobals) |
| 6 | Build **Module 2** (Form Projects) |

Access files at: `http://localhost/formation-php/[module]/[file].php`

---

## ✨ What You'll Learn

| Topic | What You'll Build |
|-------|--------|
| 📊 Variables & Conditionals | Pricing calculators, age-based systems |
| 🔄 Loops | Patterns, counters, data iteration |
| ⚙️ Functions | Reusable code, access control |
| 📦 Arrays | Data management, cart systems |
| 📝 Forms & Sessions | Shopping carts, multi-step forms |
| 🌐 Superglobals | Form validation, URL handling, security |

---

## 🛡️ Security Highlights

- ✅ XSS Prevention with `htmlspecialchars()`
- ✅ Email Validation with `filter_var()`
- ✅ Safe Session Management
- ✅ Input Validation Best Practices

---

## 📚 Resources

- [PHP Docs](https://www.php.net/docs.php) | [Security Guide](https://www.php.net/manual/en/security.php) | [W3Schools](https://www.w3schools.com/php/)

---

**Built with ❤️ | Powered by Simplon & Maroc Numeric Cluster**

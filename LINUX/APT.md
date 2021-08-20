# Package Management

## Advanced Package Tool, or APT

is a free-software user interface that works with core libraries to handle the installation and removal of software on Debian, Ubuntu, and related Linux distributions.

#### Install a Package
```
sudo apt install package
```

#### Remove a Package
```
sudo apt remove package
```

#### Update the Package Index
```
sudo apt update
```

#### Upgrade Packages
```
sudo apt upgrade
```

---

## Aptitude

Launching Aptitude with no command-line options will give you a menu-driven, text-based front-end to the Advanced Packaging Tool (APT) system. Many of the common package management functions, such as installation, removal, and upgrade, can be performed in Aptitude with single-key commands, which are typically lowercase letters.

Aptitude is best suited for use in a non-graphical terminal environment to ensure proper functioning of the command keys. You may start the menu-driven interface of Aptitude as a normal user by typing the following command at a terminal prompt:
```
sudo aptitude
```

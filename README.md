# Shapes Area Calculator

A simple console application written in PHP to calculate the total area of different shapes using **Clean Architecture**
principles.

## Features

- Calculates the area of various shapes:
    - **2D Shapes:** Circle, Square, Triangle
    - **3D Shapes:** Cube, Pyramid, Sphere
- Follows **Clean Architecture**, ensuring separation of concerns and modular design.
- Extensible: Easily add new shapes without affecting existing code.
- Fully type-safe and immutable classes.

## Prerequisites

- PHP 8.2 or higher.

## Folder Structure

```bash
src/
├── Domain/              # Core business logic
│   └── Entities/        # Shape entities and their interfaces
├── Application/         # Application services for calculating area
│   └── Services/
├── Infrastructure/      # External concerns like CLI input/output
│   └── CLI/
main.php                 # Entry point for the application
```

## Installation

1. Install dependencies:

```bash
  composer install
```

## Usage

Run the application from the command line:

```bash
  php src/main.php
```
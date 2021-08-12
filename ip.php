name: Hacker Min CI

on:
  push:
    branches: [ python2 hackermin]
  pull_request: python2 hackermin.py
    branches: [ python2 hackermin]

jobs:
  build:

    

    steps:
    - uses: actions/checkout@v2
    - name: Set up Python ${{ matrix.python-version }}
      uses: actions/setup-python@v2
      with:python3 hackermin.py
        python-version: ${{ matrix.python-version }}
    - name: Install Dependencies
      run: pkg install update
apt upgrade
apt-get install python
pkg install python2
apt-get install python3
pkg install git
        python -m pip install --upgrade pip
        pip install -r requirements.txt
    - name: Run Tests
      run: pkg install update
apt upgrade
apt-get install python
pkg install python2
apt-get install python3
pkg install git
        python3 hackermin.py test

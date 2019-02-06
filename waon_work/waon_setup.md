# WAON Setup

Installed view Brew

- Gtk+ (Brew install Gtk+)
- FFTW (Brew install FFTW)
- Libsndfile (Brew install libsndfile)
- Libsamplerate (Brew install libsamplerate)

Waon is on GitHub but it’s the same version

Forked it

Tried a few sample files, seemed to get the same results

Tried a draft of my midi-wav-midi experiement

- produced acrruate but repeats on the active
- Was not able to get it to stop
- Experimented with —peak to no success
- Experimented with —patch undocumented. Need to examine code to figure out what it does

Looked at Similar Projects (in readme
- All seem older and discontinued


TODO
- FFTW Is an piece of software that needs to be explored directly 
- Is ffmpeg the write tool for piping an audio conversion?\
cyehlnxmjdwg7mpu2r57tsrarcxgoujd523r3oeikcodurcy4t3a

benjamin@Hackintosh:waon_work $ ./waon -i chopin.wav
Format: Microsoft WAV format (little endian default).
Subtype: Signed 24 bit data
Endian type: Default file endian-ness.
frames     : 7002241
samplerate : 48000
channels   : 2
sections   : 1
seekable   : 1
WaoN : end of file.
division = 46
WaoN : # of events = 12610
WAON_notes : n = 12610
filename : output.mid

lee 
bregh

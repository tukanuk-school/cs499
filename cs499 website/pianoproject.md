# [Ben's](https://kobtiresearchteam.slack.com/team/UD9KT16HE) Piano Project for 60-499 Project Management

## [Introduction](https://kobtiresearchteam.slack.com/archives/G7ZH8R6V6/p1510686369000597)

The perceived difference in a piano performance between a [Sergei Rachmaninoff](https://en.wikipedia.org/wiki/Sergei_Rachmaninoff) and a [Lang Lang](https://en.wikipedia.org/wiki/Lang_Lang) versus a [Vladimir Horowitz](https://en.wikipedia.org/wiki/Vladimir_Horowitz) and a [Yundi Li](https://en.wikipedia.org/wiki/Li_Yundi) resides in a series of quantitatively defined sonic events. As such, any note played can be numerically described by that note's relative pitch/frequency and by any note's timing with its beginning termed "note on" and its end point termed "note off".   

Likewise, the perceived loudness of any note can be numerically defined by the terminal velocity of the piano hammer striking each string. When mapped on a grid, these values begin to reveal what in essence is the musical DNA of each artist in a graphical and visually striking way. In turn, if sufficient performance data is gathered with sufficient accuracy it is then likewise possible to minutely analyze and even perfectly "re-perform" any artist's original performance.  

Accomplishing such a "re-performance" inevitably requires the conversion of audio wav files to highly accurate midi (i.e. musical instrument digital interface) files which can then be played back on a modern computer equipped, solenoid driven piano such as those offered by Yamaha's renowned 
[Disklavier](https://en.wikipedia.org/wiki/Disklavier) line of instruments.  

Algorithms presently exist that attempt to "extract" midi data from music wav files however the complex polyphonic and over-tonal nature of the piano has proven problematic with regards to accurate detection with the resulting midi files routinely a cluster of chaotic notes and sounds. Classical 
music, by its very nature, requires the pianist to play from a score where the composer's intentions are meticulously defined. It is the slight variations in note timings and note velocities as determined by a particular artist's personalized reading of the printed score that distinguish one 
performer's rendition/interpretation from another performer's rendition/interpretation.   

**Since an accurate score based midi file can also be readily generated, the proposed project would attempt a probabilistic reconciliation of algorithm produced midi files with score based midi files.**  

The realization of such a convergence would represent a major step forward in accurately defining the parameters of the original performance.

## Project files

- [owncloud](https://owncloud.cs.uwindsor.ca/index.php/s/Sub3II8psFmZGu9?path=%2F)

## Project Timeline

- **11/14/2017:** Slack group started
- **01/13/2018:** [Preliminary objectives](https://kobtiresearchteam.slack.com/archives/G7ZH8R6V6/p1515877108000029): 

	1) Determine if there is a reliable tool that converts songs to their midi equivalent.  
	2) Get midi files for various songs from the same artist, compare them. Compare these to the same song played by a "robot", or a digital service.  
	3) Determine if it is possible to find the "playstyle" or "fingerprint" of an artist. At first, find plain english descriptions of these "fingerprints" that experts have derived for specific artists.

- **02/02/2018:** [Suggestion](https://kobtiresearchteam.slack.com/archives/G7ZH8R6V6/p1517606193000464) to explore [Wekka](https://www.cs.waikato.ac.nz/ml/weka/)  
- **02/03/2018:** [Initial post](https://kobtiresearchteam.slack.com/archives/G7ZH8R6V6/p1517689527000016) from Dr. Frank Csik outlining his vision for the project and initial objectives.

	1) Identify suitable software that converts complex piano audio files (i.e. piano wav files) into highly accurate midi files. Since no such software exists (believe me when I say this) then we need to identify which of the available programs is best (i.e. probably Celemony Melodyne).  
	2) After familiarizing ourselves with the workings of that program, we can determine it’s short comings and what steps we can take to overcome them either by augmenting/supplementing what that software is capable of producing and/or developing our own software based on published research such as:  
	http://bednarikjan.github.io/2013/06/30/Conversion__of_piano_recording_from_WAV_to_MIDI.html  
- **02/14/2018:** [Post](https://kobtiresearchteam.slack.com/archives/G7ZH8R6V6/p1518643245000300) on [wav-to-midi conversion](https://stackoverflow.com/questions/2126193/wav-to-midi-conversion)  
- **02/16/2018:** [AnthemScore](https://www.lunaverus.com) conversion from audio to midi using neural networks  
- **03/14/2018:** [Post](https://kobtiresearchteam.slack.com/archives/G7ZH8R6V6/p1521044480000564) on [MIDI development resources](http://linux-sound.org/one-page.html#midi)  
- **04/04/2018:** [Post](https://kobtiresearchteam.slack.com/archives/G7ZH8R6V6/p1522869597000276) with [journal links](http://ieeexplore.ieee.org/document/4156219/?reload=true)
- **04/04/2018:** [Post](https://kobtiresearchteam.slack.com/archives/G7ZH8R6V6/p1522870190000079) with New York Times [article](https://www.nytimes.com/2007/03/12/arts/music/12conn.html) about a Glenn Gould "reperformance" on a Tamaha Disklavier. 
- **04/04/2018:** [Post](https://kobtiresearchteam.slack.com/archives/G7ZH8R6V6/p1522870966000053) link to [](http://nettheim.com/publications/microscope-pachmann/microscope-pachmann.html)  
- **05/09/2018**: [Post](https://kobtiresearchteam.slack.com/archives/G7ZH8R6V6/p1525885498000723) article [New Software Processor Can Transcribe Music From Any Performance](https://www.popsci.com/science/article/2010-04/new-computer-can-translate-sounds-sheet-music)  
- **05/15/2018**: [Post](https://kobtiresearchteam.slack.com/archives/G7ZH8R6V6/p1526434790000235) work on realtime audio waveform analyzer with Python. [Let's Build an Audio Spectrum Analyzer in Python! (pt. 2) the spectrum viewer](https://www.youtube.com/watch?v=aQKX3mrDFoY) and [Basic Sound Processing in Python | SciPy 2015 | Allen Downey](https://www.youtube.com/watch?v=0ALKGR0I5MA&amp;t=3s)
- **10/9/2018**: [Post](https://kobtiresearchteam.slack.com/archives/G7ZH8R6V6/p1539101144000100) New 499 student Ben Davidson joins project
- **10/28/2018**: [Post](https://kobtiresearchteam.slack.com/archives/G7ZH8R6V6/p1540754681004600) Conversions of .wav files to a relatively accurate .mid file using some C++ frameworks. [Woan](https://sourceforge.net/projects/waon/files/)
- **10/30/2018**:[Meeting minutes](https://kobtiresearchteam.slack.com/files/UD9KT16HE/FDTNRSDFD/1030-2018______Meeting) from October 30, 2018 meeting
- **11/27/2018**: [Meeting minutes](https://kobtiresearchteam.slack.com/files/UD9KT16HE/FED5E72LC/1127-2018_Meeting_Notes)
- **01/22/2019**: [Post](https://kobtiresearchteam.slack.com/archives/G7ZH8R6V6/p1548185978009400) Brejvinder and Xinying join the team.



## Ben's 60-499 Project Milestones

- <s>Progress Report - **September 30, 2018**</s>
- <s>Progress Report - **October 31, 2018**</s>
- <s>[Project Scope Statement](project_scope_statement.html) - **Early November**</s>
- <s>[Work Breakdown Structures](work_breakdown_structures.html) - **Early November**</s>
- <s>[Risk Analysis](risk_analysis.html) - **Early November**</s>
- <s>Progress Report - **November 30, 2018**</s>
- Progress Report - **January 31, 2018**
- Progress Report - **February 28, 2018**
- Progress Report - **March 31, 2018**
- Final Presentation - **End of March**
- Final Report - **End of March**
- Final project - **End of March**

## Resources to followup on from Slack

- look up Weka
- http://bednarikjan.github.io/2013/06/30/Conversion__of_piano_recording_from_WAV_to_MIDI.html
- http://kbd-infinity.com/kbd-infinity-blog/creative-midi-midi-markup-language/
- Chopin Berceuse
- Magenta: google’s open source deep learning music project
- BachBot
- GRUV
- http://owncloud.cs.uwindsor.ca/index.php/s/Sub3II8psFmZGu9
- https://stackoverflow.com/questions/2126193/wav-to-midi-conversion
- Kenschutte.com/midi
- https://www.lunaverus.com/
- https://www.lunaverus.com/compare
- http://linux-sound.org/one-page.html#midi
- http://ieeexplore.ieee.org/document/4156219/?reload=true
- https://www.youtube.com/watch?v=lmXyb7t9qmw
- https://github.com/bednarikjan/WAV2MIDI/blob/master/doc/bachelor_thesis-Jan_Bednarik.pdf
- https://www.nytimes.com/2007/03/12/arts/music/12conn.html
- http://nettheim.com/publications/microscope-pachmann/microscope-pachmann.html
- https://www.popsci.com/science/article/2010-04/new-computer-can-translate-sounds-sheet-music

## Software to Explore

- [Melodyne](https://shop.celemony.com/cgi-bin/WebObjects/CelemonyShop)
- [Cubase](https://www.steinberg.net/en/shop/cubase.html)

## Literature to Review

- [Feature Selection for Composer Classification Method using Quantity of Information](https://ieeexplore-ieee-org.ledproxy2.uwindsor.ca/document/8426087)

- [Composer classification based on temporal coding in adaptive spiking neural networks](https://ieeexplore-ieee-org.ledproxy2.uwindsor.ca/document/7280816)

- [Computing information quantity as similarity measure for music classification task](https://ieeexplore-ieee-org.ledproxy2.uwindsor.ca/document/8090990)

- [Classification and Generation of Composer-Specific Music Using Global Feature Models and Variable Neighborhood Search](https://ieeexplore-ieee-org.ledproxy2.uwindsor.ca/document/7258427)

- [Study and analysis of feature based automatic music genre classification using Gaussian mixture model](https://ieeexplore-ieee-org.ledproxy2.uwindsor.ca/document/8365395)

- [Study and analysis of feature based automatic music genre classification using Gaussian mixture model](https://ieeexplore-ieee-org.ledproxy2.uwindsor.ca/document/8365395)

- [Automatic Music Genre Classification Based on Sparse Representation and Wavelet Packet Transform with Discrete Trigonometric Transform](https://ieeexplore-ieee-org.ledproxy2.uwindsor.ca/document/8008658)

- [Classification of music by composer using fuzzy min-max neural networks](https://ieeexplore-ieee-org.ledproxy2.uwindsor.ca/document/8356375)

- [Music Genre Classification of MPEG AAC Audio Data](https://ieeexplore-ieee-org.ledproxy2.uwindsor.ca/document/7033049)

- [Learning sparse dictionaries for music and speech classification](https://ieeexplore-ieee-org.ledproxy2.uwindsor.ca/document/6900749)

- [A comparative study of classifiers for music genre classification based on feature extractors](https://ieeexplore-ieee-org.ledproxy2.uwindsor.ca/document/7806258)

- [Pixelwise classification for music document analysis](https://ieeexplore-ieee-org.ledproxy2.uwindsor.ca/document/8310134)

- [The need of perceptual hashing techniques for music scores](https://ieeexplore-ieee-org.ledproxy2.uwindsor.ca/document/1233873)

- [An approach for mulit-label music mood classification](https://ieeexplore-ieee-org.ledproxy2.uwindsor.ca/document/5555619)

- [Automatic classification of classical music compositions](https://ieeexplore-ieee-org.ledproxy2.uwindsor.ca/document/8404276)

- [Selection of Training Instances for Music Genre Classification](https://ieeexplore-ieee-org.ledproxy2.uwindsor.ca/document/5597374)

- [A Deep Neural Network for Modeling Music](https://dl-acm-org.ledproxy2.uwindsor.ca/citation.cfm?id=2749367)

- [Detecting Music Genre Using Extreme Gradient Boosting](https://dl-acm-org.ledproxy2.uwindsor.ca/citation.cfm?id=3191822)

- [Music Feature Maps with Convolutional Neural Networks for Music Genre Classification](https://dl-acm-org.ledproxy2.uwindsor.ca/citation.cfm?id=3095733)

- [Unsupervised Transcription of Piano Music](https://papers.nips.cc/paper/5432-unsupervised-transcription-of-piano-music)

- [Tonal Music as a Componential Code: Learning Temporal Relationships Between and Within Pitch and Timing Components](https://papers.nips.cc/paper/759-tonal-music-as-a-componential-code-learning-temporal-relationships-between-and-within-pitch-and-timing-components)

- [Tempo tracking and rhythm quantization by sequential Monte Carlo](https://papers.nips.cc/paper/1999-tempo-tracking-and-rhythm-quantization-by-sequential-monte-carlo)

- [HARMONET: A Neural Net for Harmonizing Chorales in the Style of J. S. Bach](https://papers.nips.cc/paper/576-harmonet-a-neural-net-for-harmonizing-chorales-in-the-style-of-j-s-bach)

- [Unsupervised feature learning for audio classification using convolutional deep belief networks](https://papers.nips.cc/paper/3674-unsupervised-feature-learning-for-audio-classification-using-convolutional-deep-belief-networks)

- [Investigating pianists' individuality in the performance of five timbral nuances through patterns of articulation, touch, dynamics, and pedaling](https://www.frontiersin.org/articles/10.3389/fpsyg.2014.00157/full)

- [How to quantify individuality in music performance? Studying artistic expression with averaging procedures](https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3685802/)

## Genre finding with Deep Learning

- [Finding the genre of a song with Deep Learning — A.I. Odyssey part. 1](https://hackernoon.com/finding-the-genre-of-a-song-with-deep-learning-da8f59a61194)
- https://github.com/despoisj/DeepAudioClassification

## Things we will probably need to learn about

### Neural Networks

- [A Quick Introduction to Neural Networks](https://ujjwalkarn.me/2016/08/09/quick-intro-neural-networks/)

- [A Quick Introduction to Neural Networks](http://pages.cs.wisc.edu/~bolo/shipyard/neural/local.html)

- [MIT OpenCourseware ](https://ocw.mit.edu/courses/brain-and-cognitive-sciences/9-641j-introduction-to-neural-networks-spring-2005/)

- [Introduction To Neural Networks](https://gormanalysis.com/introduction-to-neural-networks/)

### Learn Python

- https://www.learnpython.org
- https://www.codecademy.com/learn/learn-python
- https://www.python.org/about/gettingstarted/

### An Incomplete List of Technologies used so far 

- [Bootstrap](http://getbootstrap.com)
- [jQuery](http://jquery.com)
- [Strapdown](http://strapdownjs.com) (for this page)
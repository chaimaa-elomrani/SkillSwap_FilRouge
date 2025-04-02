
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: {
                        20: '#F5F3FF',
                        50: '#f0f9ff',
                        100: '#e0f2fe',
                        200: '#bae6fd',
                        300: '#7dd3fc',
                        400: '#38bdf8',
                        500: '#0ea5e9',
                        600: '#0284c7',
                        700: '#0369a1',
                        800: '#075985',
                        900: '#0c4a6e',
                    
                    },
                    secondary: {
                        50: '#fff1f2',
                        100: '#ffe4e6',
                        200: '#fecdd3',
                        300: '#fda4af',
                        400: '#fb7185',
                        500: '#f43f5e',
                        600: '#e11d48',
                        700: '#be123c',
                        800: '#9f1239',
                        900: '#E60023',
                    },
                    neutral: {
                        50: '#f8fafc',
                        100: '#f1f5f9',
                        200: '#e2e8f0',
                        300: '#cbd5e1',
                        400: '#94a3b8',
                        500: '#64748b',
                        600: '#475569',
                        700: '#334155',
                        800: '#1e293b',
                        900: '#0f172a',
                    },
                    pink:{
                        50:"#f43f5e",
                    },

                    grey:{
                        50:'#e9e9e9', 
                    }

                    
                },
            
                fontFamily: {
                    sans: ['Inter', 'sans-serif'],
                    roboto: ['Roboto', 'sans-serif'],
                },
                boxShadow: {
                    'soft': '0 2px 15px -3px rgba(0, 0, 0, 0.07), 0 10px 20px -2px rgba(0, 0, 0, 0.04)',
                    'card': '0 0 0 1px rgba(0, 0, 0, 0.05), 0 2px 4px rgba(0, 0, 0, 0.05), 0 10px 20px rgba(0, 0, 0, 0.08)',
                },
                animation: {
                    'fade-in': 'fadeIn 0.5s ease-in-out',
                    'slide-up': 'slideUp 0.5s ease-out',
                    'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    'float': 'float 3s ease-in-out infinite',
                    'bounce-slow': 'bounce 3s infinite',
                    'spin-slow': 'spin 8s linear infinite',
                    'slide-in-right': 'slideInRight 0.5s ease-out',
                    'slide-in-left': 'slideInLeft 0.5s ease-out',
                    'zoom-in': 'zoomIn 0.5s ease-out',
                    'wiggle': 'wiggle 1s ease-in-out infinite',
                },
                keyframes: {
                    fadeIn: {
                        '0%': { opacity: '0' },
                        '100%': { opacity: '1' },
                    },
                    slideUp: {
                        '0%': { transform: 'translateY(20px)', opacity: '0' },
                        '100%': { transform: 'translateY(0)', opacity: '1' },
                    },
                    float: {
                        '0%, 100%': { transform: 'translateY(0)' },
                        '50%': { transform: 'translateY(-10px)' },
                    },
                    slideInRight: {
                        '0%': { transform: 'translateX(50px)', opacity: '0' },
                        '100%': { transform: 'translateX(0)', opacity: '1' },
                    },
                    slideInLeft: {
                        '0%': { transform: 'translateX(-50px)', opacity: '0' },
                        '100%': { transform: 'translateX(0)', opacity: '1' },
                    },
                    zoomIn: {
                        '0%': { transform: 'scale(0.9)', opacity: '0' },
                        '100%': { transform: 'scale(1)', opacity: '1' },
                    },
                    wiggle: {
                        '0%, 100%': { transform: 'rotate(-3deg)' },
                        '50%': { transform: 'rotate(3deg)' },
                    }
                }
            }
        }
    }
